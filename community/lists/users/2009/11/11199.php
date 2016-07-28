<?
$subject_val = "Re: [OMPI users] TCP sockets opened by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 11:43:57 2009" -->
<!-- isoreceived="20091115164357" -->
<!-- sent="Sun, 15 Nov 2009 08:43:51 -0800" -->
<!-- isosent="20091115164351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP sockets opened by OpenMPI" -->
<!-- id="66630707-2A40-4571-87B6-FC8F8564BE1C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="afc7dbc60911150607x3a5632f6qb5edaf5db2954ecd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP sockets opened by OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 11:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Previous message:</strong> <a href="11198.php">Jeff Squyres: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 15, 2009, at 6:07 AM, Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; With using TCP with OpenMPI 1.3.3, how many sockets does each  
</span><br>
<span class="quotelev1">&gt; process open per peer-process?  Does each process open a single  
</span><br>
<span class="quotelev1">&gt; socket to connect to each peer-process, or does it use TWO sockets,  
</span><br>
<span class="quotelev1">&gt; one for sending, one for receiving?
</span><br>
<p><p>There are multiple flavors of TCP communication potentially happening  
<br>
in each Open MPI process.
<br>
<p>We use TCP sockets for control signals between mpirun and the MPI  
<br>
process, for example.  In the OMPI 1.3 series, this is a local TCP  
<br>
socket to the &quot;orted&quot; helper daemon process that OMPI launches in the  
<br>
background.
<br>
<p>Additionally, if you're using TCP and shared memory for MPI  
<br>
communications (i.e., the TCP BTL module), Open MPI will lazily open 1  
<br>
TCP socket to each non-local peer process which which you exchange MPI  
<br>
communications.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Previous message:</strong> <a href="11198.php">Jeff Squyres: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
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
