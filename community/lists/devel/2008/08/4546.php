<?
$subject_val = "Re: [OMPI devel] Problem with SVN access.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 03:50:01 2008" -->
<!-- isoreceived="20080805075001" -->
<!-- sent="Tue, 05 Aug 2008 09:49:50 +0200" -->
<!-- isosent="20080805074950" -->
<!-- name="Anton Soppelsa" -->
<!-- email="anton.soppelsa_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with SVN access." -->
<!-- id="4898061E.2010807_at_igi.cnr.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86C6211F-5B62-4362-8E9D-12290F1543B1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with SVN access.<br>
<strong>From:</strong> Anton Soppelsa (<em>anton.soppelsa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 03:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4531.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Reply:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for your help, maybe its a problem of the local 
<br>
network and/or firewall.
<br>
<p>However, ping command works,
<br>
<p><span class="quotelev1"> &gt;ping svn.open-mpi.org
</span><br>
<p>Pinging svn.open-mpi.org [129.79.247.123] with 32 bytes of data:
<br>
<p>Reply from 129.79.247.123: bytes=32 time=148ms TTL=52
<br>
Reply from 129.79.247.123: bytes=32 time=147ms TTL=52
<br>
Reply from 129.79.247.123: bytes=32 time=146ms TTL=52
<br>
Reply from 129.79.247.123: bytes=32 time=146ms TTL=52
<br>
<p>Ping statistics for 129.79.247.123:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),
<br>
Approximate round trip times in milli-seconds:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Minimum = 146ms, Maximum = 148ms, Average = 146ms
<br>
<p>But the telnet command does not.
<br>
<p><span class="quotelev1"> &gt;telnet svn.open-mpi.org 80
</span><br>
Connecting To svn.open-mpi.org...Could not open connection to the host, 
<br>
on port
<br>
80: Connect failed
<br>
<p>C:\Documents and Settings\soppelsa_admin&gt;
<br>
<p>Bye,
<br>
&nbsp;&nbsp;Anton
<br>
<p>Jeff Squyres ha scritto:
<br>
<span class="quotelev1">&gt; I'm afraid that I'm not familiar with those tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I do SVN actions all the time from a variety of locations around 
</span><br>
<span class="quotelev1">&gt; the internet and have not had problems.  Do command-line checkouts 
</span><br>
<span class="quotelev1">&gt; work?  Do you have network connectivity to svn.open-mpi.org?  Try 
</span><br>
<span class="quotelev1">&gt; commands like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt; ping svn.open-mpi.org
</span><br>
<span class="quotelev1">&gt; telnet svn.open-mpi.org 80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't have network connectivity to the server, then your GUI 
</span><br>
<span class="quotelev1">&gt; commands won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 2:01 PM, Anton Soppelsa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI repository maintainers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tryed to download the source code of OpenMPI with a couple of SVN 
</span><br>
<span class="quotelev2">&gt;&gt; graphical clients, namely the SVN plug-in for eclipse and Tortoise 
</span><br>
<span class="quotelev2">&gt;&gt; SVN. It simply does not work. i receive the following errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tortoise:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Command: Checkout from <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>, revision 
</span><br>
<span class="quotelev2">&gt;&gt; HEAD, Fully recursive, Externals included    Error: OPTIONS of 
</span><br>
<span class="quotelev2">&gt;&gt; '<a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>': could not connect to server 
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://svn.open-mpi.org">http://svn.open-mpi.org</a>)    Finished!:
</span><br>
<span class="quotelev2">&gt;&gt; Subclipse:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   RA layer request failed
</span><br>
<span class="quotelev2">&gt;&gt;   svn: OPTIONS of '<a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>': could not 
</span><br>
<span class="quotelev2">&gt;&gt; connect to server (<a href="http://svn.open-mpi.org">http://svn.open-mpi.org</a>)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the first project that does not work with the above plugins.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas how to solve this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Anton
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4545.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4531.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Reply:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
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
