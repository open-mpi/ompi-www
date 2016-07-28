<?
$subject_val = "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:41:31 2009" -->
<!-- isoreceived="20091022154131" -->
<!-- sent="Thu, 22 Oct 2009 11:41:26 -0400" -->
<!-- isosent="20091022154126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any way to make &amp;quot;btl_tcp_if_exclude&amp;quot; option system wide?" -->
<!-- id="46D16A6C-EBD2-42A8-87D2-456CE7D91E84_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A72C1C64C331B445A593C79DA1BE580C1BD9E49EC1_at_UABEXMBS3.ad.uab.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 11:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10942.php">Francesco Pietra: "[OMPI users] installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also see the FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>It shows all the ways to set MCA parameters.
<br>
<p><p>On Oct 22, 2009, at 11:31 AM, Mike Hanby wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the link to Sun HPC ClusterTools manual. I'll read  
</span><br>
<span class="quotelev1">&gt; through that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have to consider which approach is best. Our users are  
</span><br>
<span class="quotelev1">&gt; 'supposed' to load the environment module for OpenMPI to properly  
</span><br>
<span class="quotelev1">&gt; configure their environment. The module file would be an easy  
</span><br>
<span class="quotelev1">&gt; location to add the variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That isn't always the case, however, as some users like to do it old  
</span><br>
<span class="quotelev1">&gt; school and specify all of the variables in their job script. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We install OpenMPI using a custom built RPM, so I may need to add  
</span><br>
<span class="quotelev1">&gt; the option to the openmpi-mca-params.conf file when building the RPM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Decisions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Eugene Loh
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, October 22, 2009 10:12 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot;  
</span><br>
<span class="quotelev1">&gt; option system wide?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike Hanby wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Howdy,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;My users are having to use this option with mpirun, otherwise the  
</span><br>
<span class="quotelev1">&gt; jobs will normally fail with a 111 communication error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--mca btl_tcp_if_exclude lo,eth1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Is there a way for me to set that MCA option system wide, perhaps  
</span><br>
<span class="quotelev1">&gt; via an environment variable so that they don't have to remember to  
</span><br>
<span class="quotelev1">&gt; use it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Yes.  Maybe you want to use a system-wide configuration file.  I don't
</span><br>
<span class="quotelev1">&gt; know where this is &quot;best&quot; documented, but it is at least discussed in
</span><br>
<span class="quotelev1">&gt; the Sun HPC ClusterTools User Guide.  (ClusterTools is an Open MPI
</span><br>
<span class="quotelev1">&gt; distribution.)  E.g., <a href="http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf">http://dlc.sun.com/pdf/821-0225-10/821-0225-10.pdf</a>
</span><br>
<span class="quotelev1">&gt; .  Look at Chapter 7.  The section &quot;Using MCA Parameters as  
</span><br>
<span class="quotelev1">&gt; Environment
</span><br>
<span class="quotelev1">&gt; Variables&quot; starts on page 69, but I'm not sure environment variables  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; really the way to go.  I think you want section &quot;To Specify MCA
</span><br>
<span class="quotelev1">&gt; Parameters Using a Text File&quot;, on page 71.  The file would look like  
</span><br>
<span class="quotelev1">&gt; this:
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10942.php">Francesco Pietra: "[OMPI users] installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<li><strong>In reply to:</strong> <a href="10940.php">Mike Hanby: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
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
