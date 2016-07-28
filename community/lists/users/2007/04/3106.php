<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 07:03:26 2007" -->
<!-- isoreceived="20070420110326" -->
<!-- sent="Fri, 20 Apr 2007 13:03:17 +0200" -->
<!-- isosent="20070420110317" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435" -->
<!-- id="46289DF5.8030906_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B653560-1C09-4034-A710-D6990AB60CB8_at_cisco.com" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 07:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; A big merge with the installdirs functionality was committed to the  
</span><br>
<span class="quotelev1">&gt; 1.2 branch the other day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
;-) I have adjust opal_wrapper.c to use another variable (libdir) and 
<br>
that one is expanded.
<br>
<p><span class="quotelev1">&gt; What version of Autoconf, Automake, and Libtool are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
autoconf : 2.61-4
<br>
automake : 1.10
<br>
libtool  : 1.5.22
<br>
<p><p><span class="quotelev1">&gt; Please send the full output of configure and your config.log file  
</span><br>
<span class="quotelev1">&gt; (please compress!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2007, at 5:56 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ib-r1n1.irc.sara.nl:/var/tmp/openmpi-1.2-trunk.new
</span><br>
<span class="quotelev2">&gt;&gt; root# /usr/local/gnu-openmpi-1.2.1p0/bin/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file
</span><br>
<span class="quotelev2">&gt;&gt; ${datarootdir}/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that ${datarootdir) is not expanded. So mpicc and al other
</span><br>
<span class="quotelev2">&gt;&gt; links to opal_wrapper does not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev2">&gt;&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev2">&gt;&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev2">&gt;&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************


</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3106/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3106/config.status.gz">config.status.gz</a>
</ul>
<!-- attachment="config.status.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
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
