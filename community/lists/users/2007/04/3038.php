<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 13:07:38 2007" -->
<!-- isoreceived="20070406170738" -->
<!-- sent="Fri, 6 Apr 2007 11:07:22 -0600" -->
<!-- isosent="20070406170722" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="C21F1808-A0C7-4587-9FBE-39FE382AACEB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1FB840A5-3CAA-4363-8E01-DD81ADA447ED_at_sara.nl" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-06 13:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2007, at 10:42 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 6, 2007, at 6:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2007, at 12:14 PM, Bas van der Vlies wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you run into a situation where OMPI gets the wrong flags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it's not using pbs-config?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, We install the torque header files in /usr/include/torque and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the libraries in /usr/lib. This setup does not work with openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure script. When i use the --with-tm option and set it to / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include/torque the configiure script appends &quot;include&quot; to it, so it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; becomes /usr/include/torque/include.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah.  Well, that probably raises the priority a bit.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know anything about configure scripts / m4?  I can't guarantee
</span><br>
<span class="quotelev2">&gt;&gt; that I will be able to look at this in the immediate future, but the
</span><br>
<span class="quotelev2">&gt;&gt; place to put this stuff would be in config/ompi_check_tm.m4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Oke i can check it. I know a little bit about configure/m4 scripts.
</span><br>
<span class="quotelev1">&gt; I have seen that one but did not find why include was appended
</span><br>
<span class="quotelev1">&gt; to the --with-tm value. I could find that code in configure script.
</span><br>
<p>The OMPI_CHECK_PACKAGE macro is a rather nasty macro that tries to  
<br>
reduce the replication of checking for a header then a library, then  
<br>
setting CFLAGS, LDFLAGS, LIBS, and all that.  There are two  
<br>
components that use the TM libraries, so we have a centralized macro  
<br>
that sets the configuration data for the two components.  The -I, -L,  
<br>
-ls are set in OMPI_CHECK_PACKAGE.
<br>
<p>In the OMPI_CHECK_TM macro, you probably want to check for pbs- 
<br>
config, then if that fails, run the OMPI_CHECK_PACKAGE stuff.  Of  
<br>
course, you might want to run the OMPI_CHECK_PACKAGE code with CFLAGS  
<br>
and LDFLAGS set to what you get from pbs-config, to make sure the  
<br>
libraries actually work.  The way we set flags is a bit weird -- you  
<br>
need to set the environment variables:
<br>
<p>&nbsp;&nbsp;&nbsp;$1_CPPFLAGS
<br>
&nbsp;&nbsp;&nbsp;$1_CFLAGS
<br>
&nbsp;&nbsp;&nbsp;$1_LDFLAGS
<br>
&nbsp;&nbsp;&nbsp;$1_LIBS
<br>
<p>You only have to set the ones that need to be used, of course.
<br>
<p>The hard part is going to be splitting out the LDFLAGS and the LIBS,  
<br>
as our build system might actually care about that, but pbs-config  
<br>
doesn't.  I'm not sure whether this is a big deal or not...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3037.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3057.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
