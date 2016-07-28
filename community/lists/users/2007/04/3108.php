<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 07:58:27 2007" -->
<!-- isoreceived="20070420115827" -->
<!-- sent="Fri, 20 Apr 2007 13:58:21 +0200" -->
<!-- isosent="20070420115821" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435" -->
<!-- id="4628AADD.7000409_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="387C0663-56FC-489A-9DBE-71C19227D1A4_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-20 07:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3109.php">Andreas Kuntze: "[OMPI users] uDAPL"</a>
<li><strong>Previous message:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 20, 2007, at 7:03 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ;-) I have adjust opal_wrapper.c to use another variable (libdir)  
</span><br>
<span class="quotelev2">&gt;&gt; and that one is expanded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain more what you mean by that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Because ${datarootdir} is not expanded i tryied another variable in 
<br>
opal_wrapper.c:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;datafile, &quot;%s%s%s-wrapper-data.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_install_dirs.pkgdatadir, OPAL_PATH_SEP, appname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_install_dirs.libdir
<br>
<p><span class="quotelev3">&gt;&gt;&gt; What version of Autoconf, Automake, and Libtool are you using?
</span><br>
<span class="quotelev2">&gt;&gt; autoconf : 2.61-4
</span><br>
<span class="quotelev2">&gt;&gt; automake : 1.10
</span><br>
<span class="quotelev2">&gt;&gt; libtool  : 1.5.22
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please send the full output of configure and your config.log file   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (please compress!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send these files?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also send your $prefix/share/openmpi/*-wrapper-data.txt files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Oke
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 20, 2007, at 5:56 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ib-r1n1.irc.sara.nl:/var/tmp/openmpi-1.2-trunk.new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root# /usr/local/gnu-openmpi-1.2.1p0/bin/opal_wrapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cannot open configuration file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ${datarootdir}/openmpi/opal_wrapper-wrapper-data.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error parsing data file opal_wrapper: Not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems that ${datarootdir) is not expanded. So mpicc and al other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; links to opal_wrapper does not work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.status.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mime-attachment.txt&gt;
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
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3108/wrappers.tar.gz">wrappers.tar.gz</a>
</ul>
<!-- attachment="wrappers.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3109.php">Andreas Kuntze: "[OMPI users] uDAPL"</a>
<li><strong>Previous message:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3107.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
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
