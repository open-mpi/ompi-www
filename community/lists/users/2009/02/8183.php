<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 11:33:05 2009" -->
<!-- isoreceived="20090224163305" -->
<!-- sent="Tue, 24 Feb 2009 17:32:26 +0100" -->
<!-- isosent="20090224163226" -->
<!-- name="michael.meinel_at_[hidden]" -->
<!-- email="michael.meinel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer" -->
<!-- id="924CDB255A147C48B23D75C97EBC94111F5270_at_exbe04.intra.dlr.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED7641CE-021D-47F7-AC8F-A430FA12171D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer<br>
<strong>From:</strong> <a href="mailto:michael.meinel_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20in%201.3%20loading%20shared%20libs%20when%20usingVampirServer"><em>michael.meinel_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-02-24 11:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8184.php">Jeff Squyres: "Re: [OMPI users] mingw"</a>
<li><strong>Previous message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>In reply to:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; Upon further investigation, it seems to be a problem similar to
</span><br>
this:
<br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2005/09/0359.php">http://www.open-mpi.org/community/lists/devel/2005/09/0359.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; The dynamic parts of the library are however no more linked against
</span><br>
<span class="quotelev2">&gt; &gt; their frameworks.
</span><br>
<p><span class="quotelev1">&gt; I looked at your tarball -- I don't know anything about Python, so I  
</span><br>
<span class="quotelev1">&gt; don't fully understand it.  Where does it load in libmpi?
</span><br>
<p>The minimpi(.py) Python module loads the minimpiext(.c) module and calls
<br>
its minimpiext.init() method (defined in minimpiext.c) which in turn
<br>
calls MPI_Init(). &quot;minimpiext.c&quot; is linked against libmpi. Libmpi is
<br>
loaded as soon as Python evaluates &quot;import minimpi&quot;.
<br>
<p><span class="quotelev2">&gt; &gt; To try it out yourself, please feel free to use the attached code.
</span><br>
<span class="quotelev2">&gt; &gt; * Make sure to adapt the pathes to your OpenMPI implementation in
</span><br>
<span class="quotelev2">&gt; &gt; setup.py
</span><br>
<span class="quotelev2">&gt; &gt; * Run &quot;setup.py install&quot;
</span><br>
<span class="quotelev2">&gt; &gt; * Start Python
</span><br>
<span class="quotelev2">&gt; &gt; * type &quot;import minimpi&quot; and the application should crash.
</span><br>
<p><span class="quotelev1">&gt; I had to change your code slightly for my version of python (probably
</span><br>
<p><span class="quotelev1">&gt; ancient -- whatever ships in RHEL4):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;          Py_RETURN_TRUE;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;          return PyBool_FromInt(1);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then was able to &quot;./setup.py install&quot; properly.  It looks like you  
</span><br>
<span class="quotelev1">&gt; also need to setenv PYTHON_MPI_INIT to some non-empty value as well;  
</span><br>
<span class="quotelev1">&gt; otherwise minimpi.py raises an error at import time.
</span><br>
<p>You source fix looks good, I will pass it to the minimpi maintainer.
<br>
BUT: The PYTHON_MPI_INIT environment variable is used to control our
<br>
patched Python interpreter and should not be needed. The exception is
<br>
generated just after the loading of the minimpiext(.c) module already
<br>
failed.
<br>
<p>If you replace the following line in minimpi.py:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;except ImportError: # couldn't load the .so
<br>
<p>with the following lines:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;except ImportError, e: # couldn't load the .so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print e
<br>
<p>you should get an idea why loading minimpiext failed in the first place.
<br>
These might be other incompatibilities of your platform as we usually
<br>
require Python 2.4 in our project.
<br>
<p>Regards, Michael Meinel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8184.php">Jeff Squyres: "Re: [OMPI users] mingw"</a>
<li><strong>Previous message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>In reply to:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
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
