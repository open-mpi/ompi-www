<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 04:03:29 2009" -->
<!-- isoreceived="20090225090329" -->
<!-- sent="Wed, 25 Feb 2009 10:02:41 +0100" -->
<!-- isosent="20090225090241" -->
<!-- name="michael.meinel_at_[hidden]" -->
<!-- email="michael.meinel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer" -->
<!-- id="924CDB255A147C48B23D75C97EBC94111F52FF_at_exbe04.intra.dlr.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84713330-4FF7-4A38-989C-5F046B9DF978_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer<br>
<strong>From:</strong> <a href="mailto:michael.meinel_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20in%201.3%20loading%20shared%20libs%20whenusingVampirServer"><em>michael.meinel_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-02-25 04:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the hints.
<br>
<p><span class="quotelev1">&gt; You have some possible workarounds:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - We recommended to the PyMPI author a while ago that he add his own  
</span><br>
<span class="quotelev1">&gt; dlopen() of libmpi before calling MPI_INIT, but specifically using  
</span><br>
<span class="quotelev1">&gt; RTLD_GLOBAL, so that the library is opened in the global process space
</span><br>
<p><span class="quotelev1">&gt; (not a private space in the process).  Then libmpi's (and friends)  
</span><br>
<span class="quotelev1">&gt; symbols will be available to its plugins.  If you're unhappy with the
</span><br>
<p><span class="quotelev1">&gt; non-portability of dlopen, try lt_dlopen_advise() -- it's a portable  
</span><br>
<span class="quotelev1">&gt; version that is linked inside Open MPI.
</span><br>
<p>This is the solution we go with our &quot;modified python&quot; approach. We do
<br>
not exactly dlopen libmpi but simply link the Python binary against it,
<br>
which has the same effect.
<br>
<p><span class="quotelev1">&gt; - Another option is to configure/compile Open MPI with &quot;--disable- 
</span><br>
<span class="quotelev1">&gt; dlopen&quot; or &quot;--enable-static --disable-shared&quot; configure options.   
</span><br>
<span class="quotelev1">&gt; Either of these options will cause Open MPI to slurp all of its  
</span><br>
<span class="quotelev1">&gt; plugins up into libmpi (etc) and not dynamically open them at run- 
</span><br>
<span class="quotelev1">&gt; time, thereby avoiding the problem of Python opening libmpi in a  
</span><br>
<span class="quotelev1">&gt; private scope.
</span><br>
<p>This sounds good, I gotta try this.
<br>
<p><span class="quotelev1">&gt; - Get Python to give you the possibility of opening dependent  
</span><br>
<span class="quotelev1">&gt; libraries in the global scope.  This may be somewhat controversial;  
</span><br>
<span class="quotelev1">&gt; there are good reasons to open plugins in private scopes.  But I have
</span><br>
<p><span class="quotelev1">&gt; to imagine that OMPI is not the only python extension out there that  
</span><br>
<span class="quotelev1">&gt; wants to open plugins of its own; other such projects should be  
</span><br>
<span class="quotelev1">&gt; running into similar issues.
</span><br>
<p>That would involve patching Python in some nifty places which would
<br>
probably lead to less Platform independence, so no option yet.
<br>
<p><pre>
---
Michael Meinel
German Aerospace Center
Center for Computer Applications in Aerospace Science and Engineering
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
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
