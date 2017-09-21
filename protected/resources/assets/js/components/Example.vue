<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    <div class="panel-body">
                      <div class="">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Tables <small>Some examples to get you started</small></h3>
                            <p>{{searchResult}}</p>
                          </div>
                          <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                              <div class="input-group">
                                <input type="text" @keyup="searchForPost" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
          data:{
            searchResult:''
          },
          method:{
            searchForPost:function(){
              this.searchResult= "This is the data";
            }
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
