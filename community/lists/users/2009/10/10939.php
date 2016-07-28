<?
$subject_val = "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:29:02 2009" -->
<!-- isoreceived="20091022152902" -->
<!-- sent="Thu, 22 Oct 2009 08:30:13 -0700" -->
<!-- isosent="20091022153013" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any way to make &amp;quot;btl_tcp_if_exclude&amp;quot; option system wide?" -->
<!-- id="4AE07A85.7080004_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE07654.7000205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>In reply to:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Mike Hanby wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My users are having to use this option with mpirun, otherwise the 
</span><br>
<span class="quotelev2">&gt;&gt; jobs will normally fail with a 111 communication error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_exclude lo,eth1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way for me to set that MCA option system wide, perhaps via 
</span><br>
<span class="quotelev2">&gt;&gt; an environment variable so that they don't have to remember to use it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  Maybe you want to use a system-wide configuration file.  I don't 
</span><br>
<span class="quotelev1">&gt; know where this is &quot;best&quot; documented, but it is at least discussed in 
</span><br>
<span class="quotelev1">&gt; the Sun HPC ClusterTools User Guide.  (ClusterTools is an Open MPI 
</span><br>
<span class="quotelev1">&gt; distribution.)  E.g., 
</span><br>
<span class="quotelev1">&gt; <a href="http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf">http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf</a> .  Look at Chapter 
</span><br>
<span class="quotelev1">&gt; 7.  The section &quot;Using MCA Parameters as Environment Variables&quot; starts 
</span><br>
<span class="quotelev1">&gt; on page 69, but I'm not sure environment variables are really the way 
</span><br>
<span class="quotelev1">&gt; to go.  I think you want section &quot;To Specify MCA Parameters Using a 
</span><br>
<span class="quotelev1">&gt; Text File&quot;, on page 71.  The file would look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat $OPAL_PREFIX/lib/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude = lo,eth1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where $OPAL_PREFIX is where users will be getting OMPI.  I'm not 100% 
</span><br>
<span class="quotelev1">&gt; sure on the name of that file, but need to run right now. 
</span><br>
<p>Ah, I think the file name is actually shown on the following page;  it's 
<br>
$prefix/etc/openmpi-mca-params.conf (.../etc/... rather than .../lib/...).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10938.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>In reply to:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
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
