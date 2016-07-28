<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 11 08:08:34 2007" -->
<!-- isoreceived="20070411120834" -->
<!-- sent="Wed, 11 Apr 2007 14:08:26 +0200" -->
<!-- isosent="20070411120826" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="461CCFBA.9060008_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C21F1808-A0C7-4587-9FBE-39FE382AACEB_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-04-11 08:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Previous message:</strong> <a href="3056.php">Michael Gauckler: "[OMPI users] Open MPI - Signal: Segmentation fault (11)  Problem"</a>
<li><strong>In reply to:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries to  
</span><br>
<span class="quotelev1">&gt; reduce the replication of checking for a header then a library, then  
</span><br>
<span class="quotelev1">&gt; setting CFLAGS, LDFLAGS, LIBS, and all that.  There are two  
</span><br>
<span class="quotelev1">&gt; components that use the TM libraries, so we have a centralized macro  
</span><br>
<span class="quotelev1">&gt; that sets the configuration data for the two components.  The -I, -L,  
</span><br>
<span class="quotelev1">&gt; -ls are set in OMPI_CHECK_PACKAGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the OMPI_CHECK_TM macro, you probably want to check for pbs- 
</span><br>
<span class="quotelev1">&gt; config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.  Of  
</span><br>
<span class="quotelev1">&gt; course, you might want to run the OMPI_CHECK_PACKAGE code with CFLAGS  
</span><br>
<span class="quotelev1">&gt; and LDFLAGS set to what you get from pbs-config, to make sure the  
</span><br>
<span class="quotelev1">&gt; libraries actually work.  The way we set flags is a bit weird -- you  
</span><br>
<span class="quotelev1">&gt; need to set the environment variables:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $1_CPPFLAGS
</span><br>
<span class="quotelev1">&gt;    $1_CFLAGS
</span><br>
<span class="quotelev1">&gt;    $1_LDFLAGS
</span><br>
<span class="quotelev1">&gt;    $1_LIBS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have made a crude version that uses 'pbs-config' and check uses the 
<br>
OMPI_CHECK_PACKAGE macro but in the OMPI_CHECK_PACKAGE_HEADER macro 
<br>
/include is appended if it not /usr or /usr/include. So there must 
<br>
option to prevent this (pbs-config give the right value). Then i do not 
<br>
have to set the CPPFLAGS variable.
<br>
<p>OMPI_CHECK_PACKAGE_LIB:
<br>
For the library name there is also -l prepended so i can not use the 
<br>
name form 'pbs-config --libs' and it as the same problem as with 
<br>
checking the header if it is not standard then /lib is appended.
<br>
<p>Maybe there must be another macro that can handle packages that supply
<br>
the right values to compile the package.
<br>
<p>See attach file
<br>
<p>I have attached the file
<br>
<p><pre>
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
<li>application/x-m4 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3057/ompi_check_tm.m4">ompi_check_tm.m4</a>
</ul>
<!-- attachment="ompi_check_tm.m4" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3058.php">George Bosilca: "Re: [OMPI users] Open MPI - Signal: Segmentation fault (11) Problem"</a>
<li><strong>Previous message:</strong> <a href="3056.php">Michael Gauckler: "[OMPI users] Open MPI - Signal: Segmentation fault (11)  Problem"</a>
<li><strong>In reply to:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
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
