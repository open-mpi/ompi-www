<?
$subject_val = "Re: [OMPI users] question about running openmpi with different interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 13:47:45 2011" -->
<!-- isoreceived="20110404174745" -->
<!-- sent="Mon, 4 Apr 2011 13:47:39 -0400" -->
<!-- isosent="20110404174739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question about running openmpi with different interconnects" -->
<!-- id="35C1BDAA-D6BF-49C0-BF41-5C0B1BF0C834_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="86452700B9094A47B93B8DD616E3927E06BA6D9C98_at_XCH-SW-06V.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] question about running openmpi with different interconnects<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 13:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16122.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16120.php">Jeff Squyres: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16109.php">Borenstein, Bernard S: "[OMPI users] question about running openmpi with different interconnects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2011, at 10:30 AM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; We have added clusters with different interconnects and decided to build one OPENMPI 1.4.3 version to handle all the possible interconnects
</span><br>
<span class="quotelev1">&gt; and run everywhere.  I have two questions about this :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1 &#150; is there a way for Openmpi to print out the interconnect it selected to use at run time?  I am asking for an option similar to the &#150;prot argument in hpmpi/platform mpi to print the interconnect selected.  If this is not implemented, I would like to suggest it as an enhancement.
</span><br>
<p>Unfortunately, it is not implemented.  There's a long-standing ticket requesting this feature -- it's unfortunately not a simple task, since Open MPI opens connections lazily.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1207">https://svn.open-mpi.org/trac/ompi/ticket/1207</a>
<br>
<p><span class="quotelev1">&gt; 2 &#150; I have built Openmpi to allow tcp, mx, gm and ib.  When running on a tcp only cluster and specifying &#150;mca btl tcp,sm,self, I get errors like this
</span><br>
<span class="quotelev1">&gt; [erb426:08967] Error in mx_init (error No MX device entry in /dev.)
</span><br>
<p>Try also specifying:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 ...
<br>
<p>See the README for details of the &quot;ob1&quot; vs. &quot;cm&quot; PMLs.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16122.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16120.php">Jeff Squyres: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16109.php">Borenstein, Bernard S: "[OMPI users] question about running openmpi with different interconnects"</a>
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
