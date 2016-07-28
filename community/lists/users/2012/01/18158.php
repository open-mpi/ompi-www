<?
$subject_val = "[OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 02:32:46 2012" -->
<!-- isoreceived="20120113073246" -->
<!-- sent="Fri, 13 Jan 2012 08:32:41 +0100" -->
<!-- isosent="20120113073241" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_AllGather null terminator character" -->
<!-- id="CAJNPZUUSdhyQhTi5yVZqU8YXJZ3zdG8HJOtM17R+DpT+DNW-vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_AllGather null terminator character<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 02:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18275.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18275.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI,
<br>
<p>using MPI_Allgather with MPI_CHAR type, I have a doubt about
<br>
null-terminated character. Imaging I want to spawn node names where my
<br>
program is running on:
<br>
<p><p>----------------------------------------
<br>
<p>char hostname[MAX_LEN];
<br>
<p>char*
<br>
hostname_recv_buf=(char*)calloc(num_procs*(MAX_STRING_LEN),(sizeof(char)));
<br>
<p>MPI_Allgather(hostname, MAX_STRING_LEN, MPI_CHAR, hostname_recv_buf,
<br>
MAX_STRING_LEN, MPI_CHAR, MPI_COMM_WORLD);
<br>
<p>----------------------------------------
<br>
<p><p>Now, is the null-terminated character of each local string included? Or I
<br>
have to send and receive in MPI_Allgather MAX_STRING_LEN+1 elements?
<br>
<p>Using Valgrind, in a subsequent simple strcmp:
<br>
<p>for( i= 0; i&lt; num_procs; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(strcmp(&amp;hostname_recv_buf[MAX_STRING_LEN*i],
<br>
local_hostname)==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... doing something....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>raise a warning:
<br>
<p>Conditional jump or move depends on uninitialised value(s)
<br>
==19931==    at 0x4A06E5C: strcmp (mc_replace_strmem.c:412)
<br>
<p>The same warning is not present if I use MAX_STRING_LEN+1 in MPI_Allgather.
<br>
<p><p>Thanks in forward.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18275.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18275.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
