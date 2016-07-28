<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 11:14:52 2007" -->
<!-- isoreceived="20070412151452" -->
<!-- sent="Thu, 12 Apr 2007 17:14:45 +0200" -->
<!-- isosent="20070412151445" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="461E4CE5.4090506_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A57A8D94-5AE6-4F2B-9B9D-CA2A8DCEAA34_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-04-12 11:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
<li><strong>Previous message:</strong> <a href="3067.php">Galen Arnold: "[OMPI users] mpi tcp error..."</a>
<li><strong>In reply to:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Apr 12, 2007, at 3:45 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 11, 2007, at 8:08 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to  reduce the replication of checking for a header then a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; library, then  setting CFLAGS, LDFLAGS, LIBS, and all that.   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are two  components that use the TM libraries, so we have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a centralized macro  that sets the configuration data for the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; two components.  The -I, -L,  -ls are set in OMPI_CHECK_PACKAGE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the OMPI_CHECK_TM macro, you probably want to check for pbs-  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of  course, you might want to run the OMPI_CHECK_PACKAGE code  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with CFLAGS  and LDFLAGS set to what you get from pbs-config, to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make sure the  libraries actually work.  The way we set flags is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a bit weird -- you  need to set the environment variables:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $1_CPPFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $1_CFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $1_LDFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $1_LIBS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have made a crude version that uses 'pbs-config' and check uses  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the OMPI_CHECK_PACKAGE macro but in the OMPI_CHECK_PACKAGE_HEADER  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; macro /include is appended if it not /usr or /usr/include. So  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there must option to prevent this (pbs-config give the right  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value). Then i do not have to set the CPPFLAGS variable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_CHECK_PACKAGE_LIB:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the library name there is also -l prepended so i can not use  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the name form 'pbs-config --libs' and it as the same problem as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with checking the header if it is not standard then /lib is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appended.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about assigning $1_&lt;foo&gt; directly and then passing flags that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be ignored to OMPI_CHECK_PACKAGE (e.g., &quot;/usr&quot;)?  I have not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried this at all -- just hacked this in emacs.  So it may not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even compile -- you'll need to test it.  See new attachment.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Maybe is was not clear enough ;-). The $1_&lt;FLAGS&gt; do not work i  
</span><br>
<span class="quotelev2">&gt;&gt; had to use CPPFLAGS instead of $1_CPPFLAGS else the test fails. On  
</span><br>
<span class="quotelev2">&gt;&gt; our site the torque library is found in /usr/lib so that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found else we also
</span><br>
<span class="quotelev2">&gt;&gt; must set the LDFLAGS flag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the right values of include/library directory but they are  
</span><br>
<span class="quotelev2">&gt;&gt; handled as directory prefix by the OMPI_CHECK_PACKAGE macro and not  
</span><br>
<span class="quotelev2">&gt;&gt; as directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What i tried to accomplish was that the library name was set by a  
</span><br>
<span class="quotelev2">&gt;&gt; variable. So if torque decided to use another name for the library  
</span><br>
<span class="quotelev2">&gt;&gt; we do not have to change the macro again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry not to respond yesterday -- I was frantically writing a couple  
</span><br>
<span class="quotelev1">&gt; of papers that desperately needed finishing.  Anyway, yeah, I forgot  
</span><br>
<span class="quotelev1">&gt; that OMPI_CHECK_PACKAGE did all that stuff (I don't know why I forgot  
</span><br>
<span class="quotelev1">&gt; -- that's the whole point of OMPI_CHECK_PACKAGE).  Anyway, I'd just  
</span><br>
<span class="quotelev1">&gt; figure out what the CFLAGS, LDFLAGS, and LIBS required for TM are  
</span><br>
<span class="quotelev1">&gt; (using pbs-config, of course), then call an AC_CHECK_HEADER and  
</span><br>
<span class="quotelev1">&gt; AC_CHECK_LIB to make sure the headers and libs are ok.  Then set $1_ 
</span><br>
<span class="quotelev1">&gt; {CFLAGS, LDFLAGS, LIBS} as needed and return.  Just remember that if  
</span><br>
<span class="quotelev1">&gt; you set something in CFLAGS or friends during the macro, that you  
</span><br>
<span class="quotelev1">&gt; should remove it before the macro returns so that all the other  
</span><br>
<span class="quotelev1">&gt; configure tests don't have those values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
Oke thanks for the explanation.
<br>
<pre>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3069.php">Galen Arnold: "Re: [OMPI users] mpi tcp error..."</a>
<li><strong>Previous message:</strong> <a href="3067.php">Galen Arnold: "[OMPI users] mpi tcp error..."</a>
<li><strong>In reply to:</strong> <a href="3065.php">Brian Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
