<?
$subject_val = "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:32:33 2009" -->
<!-- isoreceived="20091022153233" -->
<!-- sent="Thu, 22 Oct 2009 10:31:10 -0500" -->
<!-- isosent="20091022153110" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any way to make &amp;quot;btl_tcp_if_exclude&amp;quot; option system wide?" -->
<!-- id="A72C1C64C331B445A593C79DA1BE580C1BD9E49EC1_at_UABEXMBS3.ad.uab.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the link to Sun HPC ClusterTools manual. I'll read through that.
<br>
<p>I'll have to consider which approach is best. Our users are 'supposed' to load the environment module for OpenMPI to properly configure their environment. The module file would be an easy location to add the variable.
<br>
<p>That isn't always the case, however, as some users like to do it old school and specify all of the variables in their job script. :-)
<br>
<p>We install OpenMPI using a custom built RPM, so I may need to add the option to the openmpi-mca-params.conf file when building the RPM.
<br>
<p>Decisions...
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Eugene Loh
<br>
Sent: Thursday, October 22, 2009 10:12 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?
<br>
<p>Mike Hanby wrote:
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Previous message:</strong> <a href="10939.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10936.php">Eugene Loh: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>Reply:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
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
