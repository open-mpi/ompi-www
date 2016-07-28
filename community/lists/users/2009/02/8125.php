<?
$subject_val = "Re: [OMPI users] MPI Gather Query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 21:33:53 2009" -->
<!-- isoreceived="20090220023353" -->
<!-- sent="Thu, 19 Feb 2009 21:33:43 -0500" -->
<!-- isosent="20090220023343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Gather Query" -->
<!-- id="D6588C51-1106-4DF2-A612-D862C6683333_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fcfc36b90902191724i75d2f424ufca58c4a7e9b677c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Gather Query<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 21:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8124.php">Jeff Squyres: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8122.php">-Gim: "[OMPI users] MPI Gather Query"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 8:24 PM, -Gim wrote:
<br>
<p><span class="quotelev1">&gt; Query in MPI :   What mpi_gather does is take the data being sent by  
</span><br>
<span class="quotelev1">&gt; the i th process and places it in i th location in the receive  
</span><br>
<span class="quotelev1">&gt; buffer.   Say, I need to place the sent data in  i*10 th location in  
</span><br>
<span class="quotelev1">&gt; the receive buffer?  Is this possible at all or I have to use sent  
</span><br>
<span class="quotelev1">&gt; and recv ?
</span><br>
<p><p>You could probably make an MPI datatype with an artificially high  
<br>
MPI_UB; i.e., the datatype would be a single MPI_INT (or whatever type  
<br>
it is that you're using) and then an MPI_UB that is sizeof(int)*10  
<br>
higher than that.  Then the root can MPI_Gather with that datatype.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8124.php">Jeff Squyres: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8122.php">-Gim: "[OMPI users] MPI Gather Query"</a>
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
