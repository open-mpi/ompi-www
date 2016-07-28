<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 14 09:02:58 2007" -->
<!-- isoreceived="20070414130258" -->
<!-- sent="Sat, 14 Apr 2007 09:02:44 -0400" -->
<!-- isosent="20070414130244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and Torque" -->
<!-- id="08F0884B-86D7-4A40-BDAB-65C54993384C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="461F30E8.9050506_at_sara.nl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-14 09:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="3073.php">Christine Kreuzer: "[OMPI users] orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent -- thanks!
<br>
<p>I used your work as a starting point and tweaked it a bit further:
<br>
<p>- Parse the pbs-config LDFLAGS into LIBS and LDFLAGS
<br>
- Look for pbs-config in both the default $PATH and the tree where -- 
<br>
with-tm was specified
<br>
- Remove OMPI_CHECK_PACKAGE from the pbs-config-was-found code path;  
<br>
it was just making things confusing in an attempt to re-use code.   
<br>
Instead, I just used AC_CHECK_HEADER and AC_CHECK_FUNC directly to  
<br>
look for tm.h and the tm library.
<br>
- Used AS_IF instead of actual &quot;if&quot;
<br>
- Fixed a long-standing subtle bug that if --without-tm was  
<br>
specified, we would test for tm support anyway
<br>
<p>I've committed this on the development trunk; I don't know what our  
<br>
plans will be for incorporating this into the v1.2 series yet.  See  
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/14372">https://svn.open-mpi.org/trac/ompi/changeset/14372</a>.
<br>
<p><p>On Apr 13, 2007, at 3:27 AM, Bas van der Vlies wrote:
<br>
<p><span class="quotelev1">&gt; Here a new new ompi_check_tm.m4 that has all the functionality  
</span><br>
<span class="quotelev1">&gt; (hopefully)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev1">&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev1">&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev1">&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; &lt;ompi_check_tm.m4&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3075.php">Brian Barrett: "Re: [OMPI users] orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="3073.php">Christine Kreuzer: "[OMPI users] orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
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
