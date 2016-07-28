#include <stdio.h>
#include <mpi.h>

MPI_Comm remoteConnect(int myrank, int *srv, char *port_name, char* service)
{
    int clt=0;
    MPI_Request request; /* requete pour communication non bloquante */
    MPI_Comm gcom;
    MPI_Status status; 
    char   port_name_clt[MPI_MAX_PORT_NAME]; 

    /* only process of rank null can publish name */
    MPI_Barrier(MPI_COMM_WORLD);

    /* A lookup for an unpublished service generate an error */
    MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
    if ( myrank == 0 ) {
        /* Try to be a server. If there service is already published,
           try to be a cient */
        if (MPI_SUCCESS != MPI_Open_port(MPI_INFO_NULL, port_name)) {
            printf("MPI_Open_port failed\n");
            return MPI_COMM_NULL;
        }
        printf("[%d] Publish name\n",myrank);
        if ( MPI_Publish_name(service, MPI_INFO_NULL, 
                              port_name) == MPI_SUCCESS ) {
            *srv = 1;
            printf("[%d] service %s available at %s\n",
                   myrank,service,port_name);
        } else if ( MPI_Lookup_name(service, MPI_INFO_NULL, 
                                    port_name_clt) == MPI_SUCCESS ) {
            MPI_Close_port( port_name ); 
            clt = 1;
            printf("MPI_Lookup suceeded!\n");
        } else {
            printf("MPI_Lookup_name failed\n");
            return MPI_COMM_NULL;
        }
    } else {
        /* Waiting rank 0 publish name */
        sleep(1);
        printf("[%d] Lookup name\n",myrank);
        if ( MPI_Lookup_name(service, MPI_INFO_NULL, 
                             port_name_clt) == MPI_SUCCESS ){
            clt = 1;
        } else {
            /* Throw exception */
            printf("MPI_Lookup_name failed\n");
            return MPI_COMM_NULL;
        }
        printf("MPI_Lookup_name succeeded\n");
    }
    MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);

    printf("Bcast\n");
    MPI_Bcast(srv,1,MPI_INT,0,MPI_COMM_WORLD);
    printf("Bcast complete: srv=%d\n", *srv);

    if ( *srv ) {
        /* I am the Master */
        printf("Server calling MPI_Comm_accept\n");
        MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, 
                         MPI_COMM_WORLD, &gcom );
        printf("Server successfully comm_accepted\n");
    } else {
        /*  Connect to service SERVER, get the inter-communicator server*/
        MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
        printf("Client calling MPI_Comm_connect\n");
        if ( MPI_Comm_connect(port_name_clt, MPI_INFO_NULL, 0, 
                              MPI_COMM_WORLD, &gcom )  == MPI_SUCCESS ) {
            printf("[%d] I get the connection with %s at %s !\n",
                   myrank, service, port_name_clt);
        }
        printf("Client successfully comm_connected\n");
        MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
    }

    if (myrank != 0) {
        *srv = 0;
    }

    return gcom;
}

int main() 
{
    MPI_Comm a;
    int rank, srv;
    char port_name[MPI_MAX_PORT_NAME]; 

    MPI_Init(NULL, NULL);

    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    srv = 0;
    a = remoteConnect(rank, &srv, port_name, "ocean");
    MPI_Comm_disconnect(&a);

    MPI_Finalize();
    return 0;
}

