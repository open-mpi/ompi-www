/**
* - Lembrar na hora de executar com o MPI que os usuarios PRECISAM ter o mesmo ID.
*
*
*/
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <fcntl.h>
#include <sys/types.h>
#include <utime.h>
#include <time.h>
#include <unistd.h>
#include <sys/stat.h>
#include <sys/times.h>
#include <sys/time.h>
#include "bzlib.h"
#include <omp.h>
#include "mpi.h"

#define FILE_NAME_LEN 1034
#define BENCH   1

typedef unsigned char uchar;
typedef char Char;
typedef unsigned char Bool;
typedef unsigned char UChar;
typedef int Int32;
typedef unsigned int UInt32;
typedef short Int16;
typedef unsigned short UInt16;

#define True  ((Bool)1)
#define False ((Bool)0)

/**
 * Define o modo verboso
 */
int VERBOSE     = 1;

/*--
 IntNative is your platform's `native' int size.
 Only here to avoid probs with 64-bit platforms.
 --*/
typedef int IntNative;

Int32 blockSize100k = 9;
Int32 verbosity     = 0;
Int32 workFactor    = 30;

/**
 * Define o tamanho Maximo da fila
 */
long TAM_FILA = 10;
/**
 * Tamanho do bloco lido por cada thread
 */
long M_BLOCK  = 900*1000;
#define M_BLOCK_OUT (M_BLOCK + M_BLOCK)


/**
 * MPI Variables
 */

int  nProcs                    = 0;
int  rank                      = 0;
int  nfiles                    = 0;
int  nBlocosPorProc            = 0;
int  nBlocosResto              = 0;
long nBlocos                   = 0;
long long filesize             = 0;
long long tamComprimidoPorProc = 0;

typedef struct SBloco{
       UChar* dado;
       long int id;
} Bloco;


typedef struct s_OutputBuffer{
       long size;
       uchar *zbuf;
} OutputBuffer;


/**
 * TODO Implementando
 */
static void comprime( MPI_File stream, MPI_File zStream )
{
       // 1 T Leitora, 1 T Escritora, o resto são compressoras
       // OBS: No minimo deve existir 3 T
       #define NUM_THREADS     4
       MPI_Status status;
       //MPI_Offset offset; [DAVI]

       uchar *zbuf;
       long r, count;
       unsigned int nZ;
       long nIdBlock;
       UChar *ibuf[TAM_FILA]; // buffer de entrada
       OutputBuffer **obuf; //buffer de saida
       Int32 nIbuf[TAM_FILA];
       Int32 block_in_use[TAM_FILA];

       long nLeituraAtual;
       long nProcAtual;
       long nGravacaoAtual;
       Int32 erro;
       Int32 endRead;
       long long nTamOBuf = ( filesize / M_BLOCK ) + 1;

       // incia buffer de saida
       obuf = (OutputBuffer**)malloc( sizeof(OutputBuffer*)*nTamOBuf );

       for( count = 0; count < nTamOBuf; count++ )
       {
               if( count < TAM_FILA )
                       ibuf[count] = (UChar*)malloc( sizeof(UChar) * M_BLOCK );
               obuf[count] = (OutputBuffer*)malloc( sizeof(OutputBuffer) );
               obuf[count]->size = -1;
               obuf[count]->zbuf = NULL;
       }

       // Configura nro de threads
       omp_set_num_threads( NUM_THREADS );

       erro           = 0;
       nLeituraAtual  = 0;
       nProcAtual     = 0;
       nGravacaoAtual = 0;
       endRead        = 0;
       nIdBlock           = -1;
//      char str[10];
       //int nPrinted = 0;
       int tsleep       = 0;

       for (count = 0; count < TAM_FILA; ++count) {
               block_in_use[count] = 0;
       }

       MPI_File_set_view( stream,  0, MPI_BYTE, MPI_BYTE, "native", MPI_INFO_NULL );
       MPI_File_set_view( zStream, 0, MPI_BYTE, MPI_BYTE, "native", MPI_INFO_NULL );

// Inicio Regiao Paralela
#pragma omp parallel default(shared) private(zbuf, nZ, r, nIdBlock )
{
       zbuf = (uchar*)malloc( (M_BLOCK + 600 + (M_BLOCK / 100)) * sizeof(uchar) );

       while ( !erro && omp_get_thread_num() != 1 )
       {
               //printf( "PROCESSO %d\n", rank );
               if( omp_get_thread_num() == 0 ) //Thread Leitora
               {
                       if( VERBOSE )printf( "Processo %d Thread Leitora\n", rank );

                       if ( (rank + nLeituraAtual*nProcs) >= nBlocos &&
                                nLeituraAtual > 0                        &&
                                nBlocos       > 0                         )
                       {
                               endRead = 1;

                               if( VERBOSE ) printf( "Fim de Leitura PROCESSO %d...\n", rank );
                               break;
                       }

                       // Condição para nao sobrescrever o dado que ainda nao foi utilizado pelas slaves
                       if( (nLeituraAtual - nProcAtual) < TAM_FILA &&
                               !block_in_use[nLeituraAtual % TAM_FILA] &&
                               nBlocos > 0                              )
                       {
                               // Leitura do Arquivo de Entrada
                               if( (rank + nLeituraAtual*nProcs) == (nBlocos-1) && nBlocosResto ) // Ultimo bloco eh menor q 900k e resto != 0
                               {
                                       erro = MPI_File_read_at(stream, (rank + nLeituraAtual*nProcs)*M_BLOCK, ibuf[nLeituraAtual % TAM_FILA],
                                                       nBlocosResto, MPI_BYTE, &status );
                                       nIbuf[nLeituraAtual % TAM_FILA] = nBlocosResto;
                               }
                               else
                               {
                                       erro = MPI_File_read_at(stream, (rank + nLeituraAtual*nProcs)*M_BLOCK, ibuf[nLeituraAtual % TAM_FILA],
                                                       M_BLOCK, MPI_BYTE, &status );
                                       MPI_Get_count(&status, MPI_BYTE, &nIbuf[nLeituraAtual % TAM_FILA] );
                               }

                               if( &nIbuf[nLeituraAtual % TAM_FILA] < 0 || erro )
                               {
                                       erro = 1;
                                       printf("Erro de Leitura no Processo %d e Thread %d", rank, 0 );
                               }

                               MPI_Errhandler errhandler;
                               if ( MPI_File_get_errhandler( stream, &errhandler ) )
                                       erro = 1;

                               tamComprimidoPorProc += nIbuf[nLeituraAtual % TAM_FILA];
                               nLeituraAtual++;
                               tsleep = 0;
                       }
                       else
                       {
                               tsleep++;
                               sleep(2);// troca de contexto
                               //printf("TROCA\n");
                               if( block_in_use[nLeituraAtual % TAM_FILA] )
                                       printf("bloco %d em uso\n", (int)(nLeituraAtual % TAM_FILA));
                       }

                       if( VERBOSE )
                               printf("PROCESSO %d T0: nLeituraAtual = %ld nProcAtual = %ld end = %d erro = %d\n",
                                       rank, nLeituraAtual, nProcAtual, endRead, erro );
               }
               else
               {
                       if( VERBOSE )
                               printf( "PROCESSO %d Thread Compressora %d | nIbuf[%ld]=%d\n",
                                               rank, omp_get_thread_num(), nProcAtual % TAM_FILA, nIbuf[nProcAtual % TAM_FILA] );

                       if ( nLeituraAtual > nProcAtual && nIbuf[nProcAtual % TAM_FILA] > 0)
                       {

                               #pragma omp critical
                               {
                                       nProcAtual++; // Feito antes para evitar q 2 threads entrem ao mesmo tempo
                                       nIdBlock = nProcAtual;
                                       block_in_use[(nIdBlock - 1) % TAM_FILA] = 1;
                               }

                               int i = (nIdBlock - 1) % TAM_FILA;
                               nZ = M_BLOCK;

                               if( VERBOSE ) printf("P%d T%d Comprimindo Bloco %d...\n", rank, omp_get_thread_num( ), i );

                               r = BZ2_bzBuffToBuffCompress (
                                               zbuf, &nZ, ibuf[i], nIbuf[i], blockSize100k, verbosity, workFactor );
                               block_in_use[i] = 0;

                               if( VERBOSE ) printf("P%d T%d Comprimiu Bloco %d...Tamanho saida = %d\n",
                                               rank, omp_get_thread_num( ), i, nZ );

                               obuf[nIdBlock - 1]->size = nZ;
                               obuf[nIdBlock - 1]->zbuf = (uchar*)malloc( sizeof(uchar) * nZ );
                               memcpy( obuf[nIdBlock - 1]->zbuf, zbuf, nZ*sizeof(uchar) );
                               nGravacaoAtual++;
                       }
                       else
                       {
                               sleep(1); // troca de contexto
                               if( VERBOSE )printf("TROCA\n");
                       }

                       if( VERBOSE )
                               printf("PROCESSO %d T%d: nLeituraAtual = %ld nProcAtual = %ld end = %d erro = %d\n",
                                       rank, omp_get_thread_num(), nLeituraAtual, nProcAtual, endRead, erro );

                       if( endRead && nProcAtual >= nLeituraAtual )
                               break;
               }
       }// Fim do While de Compressao


       if( omp_get_thread_num() == 1 ) // Thread Escritora
       {
               count = 0;
               int bEscreveu = 0;
               sleep(1);
               if( VERBOSE )printf("** Processo %d Inicio Thread Escritora..\n", rank );
               // segunda condicao necessaria para o caso das variaveis ainda estiverem zeradas
               while( count < nLeituraAtual || count < (nBlocos / nProcs) )
               {
                       bEscreveu = 0;
                       while( !bEscreveu )
                       {
                               if( obuf[count]->size >= 0 )
                               {
                                       //printf("P%d T0: Escrevendo bloco %d de tamanho %d.\n%s\n", rank, count, obuf[count]->size, obuf[count]->zbuf );
                                       if( VERBOSE )printf( "Processo %d Thread Escritora escrevendo bloco %ld...\n", rank, count );
                                       //fwrite ( obuf[count]->zbuf, 1, obuf[count]->size, fp );
                                       erro = MPI_File_write_ordered( zStream, obuf[count]->zbuf, obuf[count]->size, MPI_BYTE, MPI_STATUS_IGNORE );
                                       if( erro )
                                               printf("Erro de Escrita!!\n");
                                       bEscreveu = 1;
                                       count++;
                               }
                               else
                               {
                                       printf("P%d T1: Quer escrever bloco %ld, mas esta esperando.\n", rank, count );
                                       sleep(1);
                               }
                       }
                       //printf( "Processo %d Thread Escritora Terminou escrita bloco %d...\n", rank, count );
               }
               if( VERBOSE )printf("** Processo %d Thread Escritora Terminou... **\n", rank);
       }

       #pragma omp barrier
       // Todos os processos precisam chamar a escrita ordenada o mesmo numero de vezes.
       // Como existem processo que irao trabalhar mais q outros, eh necessario igualar o numero de escritas.
       if(  omp_get_thread_num() == 1 && nLeituraAtual < ((nBlocos / nProcs) + (nBlocosResto ? 1:0)) )
       {
               if( VERBOSE )printf("** Processo %d entrou no write_ordered(NULL) **\n", rank);
               erro = MPI_File_write_ordered( zStream, NULL, 0, MPI_BYTE, MPI_STATUS_IGNORE );
       }

} // Fim Regiao Paralela

       char pname[100];
   int plen;
       MPI_Get_processor_name(
           pname,
           &plen
       );

       printf("****** Processo %d terminou no HOST: %s **\n", rank, pname );
   MPI_Barrier( MPI_COMM_WORLD );
   erro = MPI_File_close( &stream );
   if( erro )
           printf( "Erro ao fechar arquivo:%d", erro );

   erro = MPI_File_close( &zStream );
   if( erro )
           printf( "Erro ao fechar arquivo:%d", erro );

} // Fim Metodo Comprime

int main(int argc, char **argv)
{
       MPI_File inStr;
       MPI_File outStr;
   MPI_Offset offset;
   int erro = 0;
#if BENCH
           struct timezone tz;
           struct timeval tvStartTime;
           struct timeval tvStopTime;
           gettimeofday(&tvStartTime, &tz);
#endif

       MPI_Init(&argc, &argv);
       MPI_Comm_size(MPI_COMM_WORLD, &nProcs);
       MPI_Comm_rank(MPI_COMM_WORLD, &rank);

       if( VERBOSE )printf( "PROCESSO %d inicializou MPI...\n", rank );

       //inStr = fopen( argv[1], "r" );

       erro = MPI_File_open( MPI_COMM_WORLD, argv[1],  MPI_MODE_RDONLY, MPI_INFO_NULL, &inStr);
       if (erro)
       {
               MPI_Abort(MPI_COMM_WORLD, 911);
               printf("Erro ao Abrir Arquivo!\n");
               return -1;
       }

       erro = MPI_File_open( MPI_COMM_WORLD, argv[2],  MPI_MODE_RDWR | MPI_MODE_CREATE , MPI_INFO_NULL, &outStr);
       if (erro)
       {
               MPI_Abort(MPI_COMM_WORLD, 911);
               printf("Erro ao Abrir Arquivo!\n");
               return -1;
       }

       if( VERBOSE )printf("PROCESSO %d inicializou Arquivo: %s\n", rank, argv[1]);

   MPI_File_get_size( inStr, &offset ); // Verifica tamanho do arquivo
   filesize = offset;

       long MAX_MEM_ALOC = 768*1000000;

       if( filesize > MAX_MEM_ALOC )
               TAM_FILA = ( MAX_MEM_ALOC / M_BLOCK ) + 1; // tamanho da fila = tamanho do arquivo / tamanho do buffer
       else
               TAM_FILA = ( filesize / M_BLOCK ) + 1; // tamanho da fila = tamanho do arquivo / tamanho do buffer

       // Divisao do arquivo para uso no MPI
       nBlocosResto = filesize % M_BLOCK; // resto da divisao
       nBlocos = (filesize / M_BLOCK) + ( nBlocosResto ? 1 : 0 );
       //nBlocosPorProc = nBlocs / nProcs; // pedaco para cada processo
       //nFileSeek  = nFileBegin = rank * nBlocosPorProc; // Posicao atual do arquivo e inicio da leitura
//      // Posicao de final de leitura no arquivo, se for o ultimo processo soma com o resto
       //nFileEnd   = (rank+1)*nBlocosPorProc - 1 + ( rank == (nProcs-1) ? nBlocosResto : 0 );

       // chama metodo de compressao
       comprime( inStr, outStr );
       printf("\nTamanho do Pedaco Comprimido Pelo Processo %d: %lld bytes\n", rank, tamComprimidoPorProc );

   erro = MPI_Finalize( );
   if( erro )
           printf( "Erro ao Finalizar MPI:%d", erro );

       // fim benchmark
#if BENCH
   if( rank == 0 )
   {
       gettimeofday(&tvStopTime, &tz);
       // convert time structure to real numbers
       double timeStart = (double)tvStartTime.tv_sec + ((double)tvStartTime.tv_usec / 1000000);
       double timeStop  = (double)tvStopTime.tv_sec + ((double)tvStopTime.tv_usec / 1000000);
       double timeCalc  = timeStop - timeStart;
       printf("\n     Tempo Total de Execucao: %f segundos.\n", timeCalc);
   }
#endif

       return 0;
}

