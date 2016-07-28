<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 14:06:24 2007" -->
<!-- isoreceived="20070608180624" -->
<!-- sent="Fri, 08 Jun 2007 14:06:14 -0400" -->
<!-- isosent="20070608180614" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA04C3FAE5_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3347FD7E-A66D-41C4-B140-C5B314E574CE_at_cs.utk.edu" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 14:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.  But the /opt/torque directory is just the source, not the actual
<br>
installed directory.  The actual installed directory on the head node is
<br>
the default location of /usr/lib/something.  And that is not accessable
<br>
by every node.
<br>
<p>But should it matter if it's not accessable if I don't specify
<br>
--with-tm?  I was wondering if ./configure detects torque has been
<br>
installed, and then builds the associated components under the
<br>
assumption that it's available.
<br>
<p>Matt
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
614-424-5471
<br>
&nbsp;
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Friday, June 08, 2007 2:00 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm
<br>
<p>&quot;File not found&quot; is the strerror corresponding to the error we get  
<br>
when we call dlopen. So I don't think it's directly related to the  
<br>
mca_pls_tm.so library but to one of it's missing dependencies.
<br>
<p>Do you have access to the /opt/torque directory on all nodes in your  
<br>
cluster ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 8, 2007, at 1:22 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I uninstalled and deleted our old installation directories of 1.1.4  
</span><br>
<span class="quotelev1">&gt; and 1.2.1 so I could have it nice and clean for 1.2.2.  I extracted  
</span><br>
<span class="quotelev1">&gt; the source and ran configure with these options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/st --with-devel-headers --with-tm=/opt/torque
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then build and installed it.  But when I ran a program I got  
</span><br>
<span class="quotelev1">&gt; these messages from each of my processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;machine name&gt;: mca: base: component_find: unable to open pls tm:  
</span><br>
<span class="quotelev1">&gt; File not found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;machine name&gt;: mca: base: component_find: unable to open ras tm:  
</span><br>
<span class="quotelev1">&gt; File not found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was the first time that Open MPI was configured with -with-tm  
</span><br>
<span class="quotelev1">&gt; as torque wasn't installed previously.  I found out that torque was  
</span><br>
<span class="quotelev1">&gt; not installed to /opt/torque as it was supposed to be, but to it's  
</span><br>
<span class="quotelev1">&gt; default location.  So I reran the configure without --with-tm and  
</span><br>
<span class="quotelev1">&gt; rebuilt and reinstalled (after uninstalling the previous build).   
</span><br>
<span class="quotelev1">&gt; But I still got the same messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I completely deleted the source directory and destination  
</span><br>
<span class="quotelev1">&gt; directory, extract the source, ran configure, rebuild and  
</span><br>
<span class="quotelev1">&gt; installed.  But still the same errors.  According to the open mpi  
</span><br>
<span class="quotelev1">&gt; faq, support for torque must be explicitly added via configure.   
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>)  So  
</span><br>
<span class="quotelev1">&gt; is it still including it somehow?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________
</span><br>
<span class="quotelev1">&gt; Matt Cupp
</span><br>
<span class="quotelev1">&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev1">&gt; Statistics and Information Analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
