<?
$subject_val = "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:11:27 2009" -->
<!-- isoreceived="20091022151127" -->
<!-- sent="Thu, 22 Oct 2009 08:12:20 -0700" -->
<!-- isosent="20091022151220" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any way to make &amp;quot;btl_tcp_if_exclude&amp;quot; option system wide?" -->
<!-- id="4AE07654.7000205_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A72C1C64C331B445A593C79DA1BE580C1BD9E49EBF_at_UABEXMBS3.ad.uab.edu" -->
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
<strong>Date:</strong> 2009-10-22 11:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10937.php">Ralph Castain: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>In reply to:</strong> <a href="10934.php">Mike Hanby: "[OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Hanby wrote:
<br>
<p><span class="quotelev1">&gt;Howdy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My users are having to use this option with mpirun, otherwise the jobs will normally fail with a 111 communication error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--mca btl_tcp_if_exclude lo,eth1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a way for me to set that MCA option system wide, perhaps via an environment variable so that they don't have to remember to use it?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes.  Maybe you want to use a system-wide configuration file.  I don't 
<br>
know where this is &quot;best&quot; documented, but it is at least discussed in 
<br>
the Sun HPC ClusterTools User Guide.  (ClusterTools is an Open MPI 
<br>
distribution.)  E.g., <a href="http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf">http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf</a> 
<br>
.  Look at Chapter 7.  The section &quot;Using MCA Parameters as Environment 
<br>
Variables&quot; starts on page 69, but I'm not sure environment variables are 
<br>
really the way to go.  I think you want section &quot;To Specify MCA 
<br>
Parameters Using a Text File&quot;, on page 71.  The file would look like this:
<br>
<p>% cat $OPAL_PREFIX/lib/openmpi-mca-params.conf
<br>
btl_tcp_if_exclude = lo,eth1
<br>
<p>where $OPAL_PREFIX is where users will be getting OMPI.  I'm not 100% 
<br>
sure on the name of that file, but need to run right now.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10937.php">Ralph Castain: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>Previous message:</strong> <a href="10935.php">Rayson Ho: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batch system integration"</a>
<li><strong>In reply to:</strong> <a href="10934.php">Mike Hanby: "[OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
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
