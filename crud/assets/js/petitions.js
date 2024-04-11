
    export async function getAllUsers(){
      const resp = await fetch("/api/getUsers.php");
      const json = await resp.json();
      
      return json;
  }
  
  export async function createNewTask(FormData){
      const options = {
          method: 'POST',
          body: FormData
      };
      const resp = await fetch("/api/createTask.php", options);
      const json = await resp;
      return json;
  }
  
  export async function getAllTasks(){
      const resp = await fetch("/api/getTasks.php");
      const json = await resp.json();
  
      return json;
  }
  
  export async function deleteTask(id){
      const resp = await fetch("/api/deleteTask.php?id="+id);
      const json = await resp;
      return json;
  }
  
  export async function updateTask(id,url){
      const resp = await fetch(url + "?id="+id);
      const json = await resp.json();
      return json;
  
  }
  