/* 
 * Derived testing application, originally written by jens.henrik.goebbert@itv.rwth-aachen.de
 * for testing a bug in openmpi/sunmpi implementations
 */ 

#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
typedef unsigned long long uint64;
#define concat(a, b)  a ## b

int main ( int argc, char **argv )
{
    MPI_Init( &argc, &argv );

    MPI_File fh_input,fh_output;
    MPI_Datatype i8_type;
    MPI_Status status;
    int rank, teamsize;
    int i;
    int size = 12000;
    
    MPI_Comm_rank( MPI_COMM_WORLD, &rank );
    MPI_Comm_size( MPI_COMM_WORLD, &teamsize );
    int my_data_size[1] = { size / teamsize };
    int my_disp[1] = { my_data_size[0] * rank };
    int offset = my_data_size[0];
    MPI_Type_indexed( 1, my_data_size, my_disp, MPI_INTEGER8, &i8_type );
    MPI_Type_commit( &i8_type );
    
    // Writing File
    
    MPI_File_open( MPI_COMM_SELF, argv[1], MPI_MODE_CREATE|MPI_MODE_WRONLY, MPI_INFO_NULL, &fh_input );
    MPI_File_set_view( fh_input, offset, MPI_INTEGER8, i8_type, "native", MPI_INFO_NULL );
    uint64 *id_liste = malloc( my_data_size[0] * sizeof(uint64) );
    
    for (i = 0; i < my_data_size[0];i++) {
        id_liste[i] = (uint64)(i + (rank * offset));
    }
    MPI_File_write (fh_input, id_liste, my_data_size[0], MPI_INTEGER8, &status);
    MPI_File_sync(fh_input);
    MPI_File_close (&fh_input);
    free(id_liste);

    
    // Reading File
    MPI_File_open( MPI_COMM_SELF, argv[1], MPI_MODE_RDONLY, MPI_INFO_NULL, &fh_output );
    MPI_File_set_view( fh_output, offset, MPI_INTEGER8, i8_type, "native", MPI_INFO_NULL );
    uint64 *id_list = malloc( my_data_size[0] * sizeof(uint64) );
    for (i=0;i<my_data_size[0];i++)
        id_list[i] = 0;
    MPI_File_read_all( fh_output, id_list, my_data_size[0], MPI_INTEGER8, &status );
    char filename[1024];
    sprintf( filename, "%s%i",argv[1],rank+1 );
    FILE *fp = fopen( filename, "wb" );
    for( i=0; i < my_data_size[0]; i++ )
        fprintf( fp, "%i\n", (int)id_list[i] );
    fflush(fp);
    fclose(fp);
    MPI_File_close( &fh_output );
    free( id_list );
    MPI_Finalize();
}

    
    



