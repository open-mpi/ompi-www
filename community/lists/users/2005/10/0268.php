<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 22:52:20 2005" -->
<!-- isoreceived="20051101035220" -->
<!-- sent="Mon, 31 Oct 2005 22:52:04 -0500" -->
<!-- isosent="20051101035204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP problems with 1.0rc4" -->
<!-- id="91189b76111b803dd12638da6aef94e4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D0F7CE01-754D-48A1-9C09-B4DB3B15E173_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 22:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>In reply to:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2005, at 11:05 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; For TCP you can get the list of available MCA parameters using
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info --param btl tcp&quot;. The one involved in selecting the
</span><br>
<span class="quotelev1">&gt; network are:
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; You just have to set one of them as they are exclusive. So if you
</span><br>
<span class="quotelev1">&gt; want to select the second network interface (let say it is named
</span><br>
<span class="quotelev1">&gt; eth1) you have to add in the mca-params.conf file the following line:
</span><br>
<span class="quotelev1">&gt; bl_tcp_if_include=eth1
</span><br>
<p>FWIW, I added a bunch of &quot;MPI Tuning:&quot; sections to the FAQ today -- I 
<br>
added all this information into the &quot;MPI Tuning:TCP&quot; section:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0269.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>In reply to:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
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
