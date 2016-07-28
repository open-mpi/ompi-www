<?
$subject_val = "Re: [OMPI users] Making RPM from source that respects --prefix";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 08:05:55 2009" -->
<!-- isoreceived="20091002120555" -->
<!-- sent="Fri, 2 Oct 2009 08:05:46 -0400" -->
<!-- isosent="20091002120546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Making RPM from source that respects --prefix" -->
<!-- id="A86B1911-4F63-4878-B7FC-B132CB9E6F88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="666203.88099.qm_at_web57605.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Making RPM from source that respects --prefix<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 08:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
rpmbuild likes to pass many of its own options to configure, including  
<br>
many that set bindir, libdir, etc. explicitly.  Try setting _prefix  
<br>
instead of passing the prefix as a configure_options.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;rpmbuild --rebuild --define '_prefix /tmp/bogus'  
<br>
openmpi-1.3.3-1.src.rpm
<br>
<p><p><p>On Oct 2, 2009, at 6:48 AM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build an RPM of 1.3.3 from the SRPM.  Despite typical  
</span><br>
<span class="quotelev1">&gt; RPM practice, I need to build ompi so that it installs to a  
</span><br>
<span class="quotelev1">&gt; different directory from /usr or /opt, i.e. what I would get if I  
</span><br>
<span class="quotelev1">&gt; just built from source myself with a --prefix argument to configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I invoke buildrpm with the --define 'configure_options -- 
</span><br>
<span class="quotelev1">&gt; prefix=&lt;desired path&gt; ...', the options do get set when the building  
</span><br>
<span class="quotelev1">&gt; process gets kicked off.  However, when I query the final RPM, only  
</span><br>
<span class="quotelev1">&gt; vampirtrace has paid attention to the specified --prefix and wants  
</span><br>
<span class="quotelev1">&gt; to place its files accordingly.  How should I alter the .spec file  
</span><br>
<span class="quotelev1">&gt; (or in some other place?) to get the desired behavior for the final  
</span><br>
<span class="quotelev1">&gt; file locations in the RPM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for any help.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>In reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
