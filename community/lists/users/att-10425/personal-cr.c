/*
 * Example Open MPI CRS 'self' program
 * Author: Josh Hursey
 */
#include <mpi.h>
#include <stdio.h>
#include <signal.h>
#include <string.h>

#define LIMIT 100

/************************
 * Function Declarations
 ************************/
void signal_handler(int sig);

/* Default OPAL crs self callback functions */
int opal_crs_self_user_checkpoint(char **restart_cmd);
int opal_crs_self_user_continue(void);
int opal_crs_self_user_restart(void);

/* OPAL crs self callback functions */
int my_personal_checkpoint(char **restart_cmd);
int my_personal_continue(void);
int my_personal_restart(void);

/*******************
 * Global Variables
 *******************/
int am_done = 1;
int current_step  = 0;
char ckpt_file[128] = "my-personal-cr-file.ckpt";
char restart_path[128] = "/full/path/to/personal-cr";

/*********
 *  Main
 *********/
int main(int argc, char *argv[]) {
    int rank, size;
    
    current_step = 0;

    MPI_Init(&argc, &argv);

    /* So we can exit cleanly */
    signal(SIGINT,  signal_handler);
    signal(SIGTERM, signal_handler);

    for(; current_step <  LIMIT; current_step += 1) {
        printf("%d) Step %d\n", getpid(), current_step);
        sleep(1);
        if(0 == am_done) {
            break;
        }
    }

    MPI_Finalize();

    return 0;
}

void signal_handler(int sig) {
    printf("Received Signal %d\n", sig);
    am_done = 0;
}

/* OPAL crs self callbacks for checkpoint */
int opal_crs_self_user_checkpoint(char **restart_cmd) {
    printf("opal_crs_self_user_checkpoint callback...\n");
    my_personal_checkpoint(restart_cmd);
    return 0;
}

int opal_crs_self_user_continue(void) {
    printf("opal_crs_self_user_continue callback...\n");
    my_personal_continue();
    return 0;
}

int opal_crs_self_user_restart(void) {
    printf("opal_crs_self_user_restart callback...\n");
    my_personal_restart();
    return 0;
}

/* OPAL crs self callback for checkpoint */
int my_personal_checkpoint(char **restart_cmd) {
    FILE *fp;
    
    *restart_cmd = NULL;

    printf("my_personal_checkpoint callback...\n");
    
    /*
     * Open our checkpoint file
     */
    if( NULL == (fp = fopen(ckpt_file, "w")) ) {
        fprintf(stderr, "Error: Unable to open file (%s)\n", ckpt_file);
        return;
    }
    
    /*
     * Save the process state
     */
    fprintf(fp, "%d\n", current_step);
    
    /*
     * Close the checkpoint file
     */
    fclose(fp);

    /*
     * Figure out the restart command
     */
    asprintf(restart_cmd, "%s", strdup(restart_path));

    return 0;
}

int my_personal_continue() {
    printf("my_personal_continue callback...\n");
    /* Don't need to do anything here since we are in the
     *  state that we want to be in already.
     */
    return 0;
}

int my_personal_restart() {
    FILE *fp;

    printf("my_personal_restart callback...\n");

    /*
     * Open our checkpoint file
     */
    if( NULL == (fp = fopen(ckpt_file, "r")) ) {
        fprintf(stderr, "Error: Unable to open file (%s)\n", ckpt_file);
        return;
    }

    /*
     * Access the process state that we saved and 
     * update the current step variable.
     */
    fscanf(fp, "%d", &current_step);
    
    fclose(fp);

    printf("my_personal_restart: Restarting from step %d\n", current_step);    
    
    return 0;
}

