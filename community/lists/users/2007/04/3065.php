<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 10:32:14 2007" -->
<!-- isoreceived="20070412143214" -->
<!-- sent="Thu, 12 Apr 2007 08:31:45 -0600" -->
<!-- isosent="20070412143145" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="A57A8D94-5AE6-4F2B-9B9D-CA2A8DCEAA34_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="461DFFB6.8080004_at_sara.nl" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-12 10:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3066.php">Derrick Kondo: "[OMPI users] [CFP] EuroPVM/MPI'07"</a>
<li><strong>Previous message:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2007, at 3:45 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 11, 2007, at 8:08 AM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to  reduce the replication of checking for a header then a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library, then  setting CFLAGS, LDFLAGS, LIBS, and all that.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are two  components that use the TM libraries, so we have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a centralized macro  that sets the configuration data for the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two components.  The -I, -L,  -ls are set in OMPI_CHECK_PACKAGE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the OMPI_CHECK_TM macro, you probably want to check for pbs-  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of  course, you might want to run the OMPI_CHECK_PACKAGE code  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with CFLAGS  and LDFLAGS set to what you get from pbs-config, to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make sure the  libraries actually work.  The way we set flags is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a bit weird -- you  need to set the environment variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $1_CPPFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $1_CFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $1_LDFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $1_LIBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have made a crude version that uses 'pbs-config' and check uses  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OMPI_CHECK_PACKAGE macro but in the OMPI_CHECK_PACKAGE_HEADER  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro /include is appended if it not /usr or /usr/include. So  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there must option to prevent this (pbs-config give the right  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value). Then i do not have to set the CPPFLAGS variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_CHECK_PACKAGE_LIB:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the library name there is also -l prepended so i can not use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the name form 'pbs-config --libs' and it as the same problem as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with checking the header if it is not standard then /lib is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appended.
</span><br>
<span class="quotelev2">&gt;&gt; What about assigning $1_&lt;foo&gt; directly and then passing flags that  
</span><br>
<span class="quotelev2">&gt;&gt; will be ignored to OMPI_CHECK_PACKAGE (e.g., &quot;/usr&quot;)?  I have not  
</span><br>
<span class="quotelev2">&gt;&gt; tried this at all -- just hacked this in emacs.  So it may not  
</span><br>
<span class="quotelev2">&gt;&gt; even compile -- you'll need to test it.  See new attachment.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; --Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Maybe is was not clear enough ;-). The $1_&lt;FLAGS&gt; do not work i  
</span><br>
<span class="quotelev1">&gt; had to use CPPFLAGS instead of $1_CPPFLAGS else the test fails. On  
</span><br>
<span class="quotelev1">&gt; our site the torque library is found in /usr/lib so that can be  
</span><br>
<span class="quotelev1">&gt; found else we also
</span><br>
<span class="quotelev1">&gt; must set the LDFLAGS flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the right values of include/library directory but they are  
</span><br>
<span class="quotelev1">&gt; handled as directory prefix by the OMPI_CHECK_PACKAGE macro and not  
</span><br>
<span class="quotelev1">&gt; as directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What i tried to accomplish was that the library name was set by a  
</span><br>
<span class="quotelev1">&gt; variable. So if torque decided to use another name for the library  
</span><br>
<span class="quotelev1">&gt; we do not have to change the macro again.
</span><br>
<p>Sorry not to respond yesterday -- I was frantically writing a couple  
<br>
of papers that desperately needed finishing.  Anyway, yeah, I forgot  
<br>
that OMPI_CHECK_PACKAGE did all that stuff (I don't know why I forgot  
<br>
-- that's the whole point of OMPI_CHECK_PACKAGE).  Anyway, I'd just  
<br>
figure out what the CFLAGS, LDFLAGS, and LIBS required for TM are  
<br>
(using pbs-config, of course), then call an AC_CHECK_HEADER and  
<br>
AC_CHECK_LIB to make sure the headers and libs are ok.  Then set $1_ 
<br>
{CFLAGS, LDFLAGS, LIBS} as needed and return.  Just remember that if  
<br>
you set something in CFLAGS or friends during the macro, that you  
<br>
should remove it before the macro returns so that all the other  
<br>
configure tests don't have those values.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3066.php">Derrick Kondo: "[OMPI users] [CFP] EuroPVM/MPI'07"</a>
<li><strong>Previous message:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3064.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3068.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
