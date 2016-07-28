<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 05:45:36 2007" -->
<!-- isoreceived="20070412094536" -->
<!-- sent="Thu, 12 Apr 2007 11:45:26 +0200" -->
<!-- isosent="20070412094526" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="461DFFB6.8080004_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FF1DC84C-CAE7-48A5-9A58-043FFAA7539B_at_cisco.com" -->
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
<strong>Date:</strong> 2007-04-12 05:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3063.php">Sumit Naiksatam: "[OMPI users] 1st IEEE/IFIP International Workshop on End-to-end	Virtualization and Grid Management"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 11, 2007, at 8:08 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reduce the replication of checking for a header then a library, then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting CFLAGS, LDFLAGS, LIBS, and all that.  There are two  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components that use the TM libraries, so we have a centralized macro  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that sets the configuration data for the two components.  The -I, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L,  -ls are set in OMPI_CHECK_PACKAGE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the OMPI_CHECK_TM macro, you probably want to check for pbs- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.  Of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; course, you might want to run the OMPI_CHECK_PACKAGE code with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS  and LDFLAGS set to what you get from pbs-config, to make sure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  libraries actually work.  The way we set flags is a bit weird -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you  need to set the environment variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $1_CPPFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $1_CFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $1_LDFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $1_LIBS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have made a crude version that uses 'pbs-config' and check uses the 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CHECK_PACKAGE macro but in the OMPI_CHECK_PACKAGE_HEADER macro 
</span><br>
<span class="quotelev2">&gt;&gt; /include is appended if it not /usr or /usr/include. So there must 
</span><br>
<span class="quotelev2">&gt;&gt; option to prevent this (pbs-config give the right value). Then i do 
</span><br>
<span class="quotelev2">&gt;&gt; not have to set the CPPFLAGS variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CHECK_PACKAGE_LIB:
</span><br>
<span class="quotelev2">&gt;&gt; For the library name there is also -l prepended so i can not use the 
</span><br>
<span class="quotelev2">&gt;&gt; name form 'pbs-config --libs' and it as the same problem as with 
</span><br>
<span class="quotelev2">&gt;&gt; checking the header if it is not standard then /lib is appended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about assigning $1_&lt;foo&gt; directly and then passing flags that will 
</span><br>
<span class="quotelev1">&gt; be ignored to OMPI_CHECK_PACKAGE (e.g., &quot;/usr&quot;)?  I have not tried this 
</span><br>
<span class="quotelev1">&gt; at all -- just hacked this in emacs.  So it may not even compile -- 
</span><br>
<span class="quotelev1">&gt; you'll need to test it.  See new attachment.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Jeff,
<br>
<p>&nbsp;&nbsp;Maybe is was not clear enough ;-). The $1_&lt;FLAGS&gt; do not work i had to 
<br>
use CPPFLAGS instead of $1_CPPFLAGS else the test fails. On our site the 
<br>
torque library is found in /usr/lib so that can be found else we also
<br>
must set the LDFLAGS flag.
<br>
<p>I have the right values of include/library directory but they are 
<br>
handled as directory prefix by the OMPI_CHECK_PACKAGE macro and not as 
<br>
directory.
<br>
<p>What i tried to accomplish was that the library name was set by a 
<br>
variable. So if torque decided to use another name for the library we do 
<br>
not have to change the macro again.
<br>
<p>Regards
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li>application/x-m4 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3064/ompi_check_tm.m4">ompi_check_tm.m4</a>
</ul>
<!-- attachment="ompi_check_tm.m4" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3063.php">Sumit Naiksatam: "[OMPI users] 1st IEEE/IFIP International Workshop on End-to-end	Virtualization and Grid Management"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
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
