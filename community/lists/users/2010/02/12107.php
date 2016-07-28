<?
$subject_val = "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 01:34:15 2010" -->
<!-- isoreceived="20100219063415" -->
<!-- sent="Fri, 19 Feb 2010 07:34:09 +0100" -->
<!-- isosent="20100219063409" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn" -->
<!-- id="4B7E30E1.9090000_at_laposte.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B7DABE4.807_at_laposte.net" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 01:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
George,<br>
<br>
Thank you very much for you well argumented answer. Indeed, I missed
something because I used MPI_Comm_remote_size in my spawned application.<br>
<br>
Mathieu
<blockquote cite="mid:4B7DABE4.807@laposte.net" type="cite"><br>
  <br>
George Bosilca wrote:
  <blockquote
 cite="mid:CA9D2B87-5C0D-4B9B-BFD8-F416E7E38265@eecs.utk.edu"
 type="cite">
    <pre wrap="">Mathieu,

Your MPI_COMM_UNIVERSE is a inter-communicator, and therefore the MPI_Comm_size and MPI_Comm_rank return the size, respectively the rank, in the local group. There is a special accessor for getting the remote group size (MPI_Comm_remote_size).

Now regarding the previous question (about the attribute MPI_UNIVERSE_SIZE), your answer is in the MPI standard 2.2 page 346 line 35. The MPI_UNIVERSE_SIZE is not set in Open MPI.

  george.

On Feb 18, 2010, at 10:18 , Mathieu Gontier wrote:

  </pre>
    <blockquote type="cite">
      <pre wrap="">Another question on the same example.

When I ask the size on the inter-communitator (MPI_COMM_UNIVERSE in the example) between the spaner/parent and the spawned/children processes, the same number of processes than in MPI_COMM_WORLD is returned. I do not really understand because I expected my MPI_COMM_UNIVERSE be a higher communicator including here the group of MPI_COMM_SELF and the group of MPI_COMM_WORLD of my spawned application (./worker).
I think I missed something. Does someone can help me?

Thank you.

Mathieu Gontier wrote:
    </pre>
      <blockquote type="cite">
        <pre wrap="">Hello,

I am trying to use MPI_Comm_spawn (MPI-2 standard only) and I have an problem when I use MPI_UNIVERSE_SIZE. Here my code:

int main( int argc, char *argv[] )
{
 int wsize=0, wrank=-1 ;
 int usize=0, urank=-1 ;
 int ier ;
 int usize_attr=0, flag=0 ;
 MPI_Comm MPI_COMM_UNIVERSE;
 ier = MPI_Init( &amp;argc, &amp;argv ) ;
 ier = MPI_Comm_size( MPI_COMM_WORLD, &amp;wsize ) ;
 ier = MPI_Comm_rank( MPI_COMM_WORLD, &amp;wrank ) ;
 ier = MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, (void*) &amp;usize_attr, &amp;flag ) ;
 if ( !flag ) { printf( "[manager][error] This MPI does not support MPI_UNIVERSE_SIZE.\n" ) ; return 1 ; }
 if( wrank==0 ) {
     ier = MPI_Comm_spawn( "./worker", argv, ( wsize/2 &gt; 2 ? wsize/2 : 2 ), MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;MPI_COMM_UNIVERSE, MPI_ERRCODES_IGNORE);
     ier = MPI_Comm_size( MPI_COMM_UNIVERSE, &amp;usize ) ;
     ier = MPI_Comm_rank( MPI_COMM_UNIVERSE, &amp;urank ) ;
 }
 printf( "[manager] I am the process %d on %d in world (universe attr size: %d) and  %d on %d in universe\n", wrank, wsize, usize_attr, urank, usize ) ;
 MPI_Finalize();
 return 0;
}

When I call MPI_Comm_get_attr() with MPI_UNIVERSE_SIZE, my variable u_size_attr is random. Any idea?

Thank you.


_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated"
 href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

      </pre>
      </blockquote>
      <pre wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated"
 href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    </pre>
    </blockquote>
    <pre wrap=""><!---->

_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated"
 href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12106.php">George Bosilca: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
