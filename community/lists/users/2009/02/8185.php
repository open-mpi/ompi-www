<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 13:07:24 2009" -->
<!-- isoreceived="20090224180724" -->
<!-- sent="Tue, 24 Feb 2009 13:07:18 -0500" -->
<!-- isosent="20090224180718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer" -->
<!-- id="45F09016-FD96-4347-9F8F-538AC4AE3ED3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="924CDB255A147C48B23D75C97EBC94111F5270_at_exbe04.intra.dlr.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 13:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8184.php">Jeff Squyres: "Re: [OMPI users] mingw"</a>
<li><strong>In reply to:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 11:32 AM, &lt;michael.meinel_at_[hidden]&gt; &lt;michael.meinel_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; The minimpi(.py) Python module loads the minimpiext(.c) module and  
</span><br>
<span class="quotelev1">&gt; calls
</span><br>
<span class="quotelev1">&gt; its minimpiext.init() method (defined in minimpiext.c) which in turn
</span><br>
<span class="quotelev1">&gt; calls MPI_Init(). &quot;minimpiext.c&quot; is linked against libmpi. Libmpi is
</span><br>
<span class="quotelev1">&gt; loaded as soon as Python evaluates &quot;import minimpi&quot;.
</span><br>
<p>Ah, ok.  I wonder if you're not building properly.  -lmpi is not  
<br>
usually suffucient to build an Open MPI application; we hide a bunch  
<br>
of flags inside mpicc you can see via mpicc --showme.
<br>
<p>How does one add more ldflags to your setup.py script?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; To try it out yourself, please feel free to use the attached code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Make sure to adapt the pathes to your OpenMPI implementation in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Run &quot;setup.py install&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Start Python
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * type &quot;import minimpi&quot; and the application should crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had to change your code slightly for my version of python (probably
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ancient -- whatever ships in RHEL4):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if 0
</span><br>
<span class="quotelev2">&gt;&gt;         Py_RETURN_TRUE;
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;         return PyBool_FromInt(1);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then was able to &quot;./setup.py install&quot; properly.  It looks like you
</span><br>
<span class="quotelev2">&gt;&gt; also need to setenv PYTHON_MPI_INIT to some non-empty value as well;
</span><br>
<span class="quotelev2">&gt;&gt; otherwise minimpi.py raises an error at import time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You source fix looks good, I will pass it to the minimpi maintainer.
</span><br>
<p>Actually, as I got further, I see PyBool_FromInt() does not exist --  
<br>
but PyBool_FromLong() does.  Use that instead.
<br>
<p><span class="quotelev1">&gt; BUT: The PYTHON_MPI_INIT environment variable is used to control our
</span><br>
<span class="quotelev1">&gt; patched Python interpreter and should not be needed. The exception is
</span><br>
<span class="quotelev1">&gt; generated just after the loading of the minimpiext(.c) module already
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<p>Ah, I see -- it was ignoring the exception in what you initially sent,  
<br>
which is why I ran into this issue.
<br>
<p><span class="quotelev1">&gt; If you replace the following line in minimpi.py:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    except ImportError: # couldn't load the .so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the following lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    except ImportError, e: # couldn't load the .so
</span><br>
<span class="quotelev1">&gt;        print e
</span><br>
<p><p>Ok, now I'm getting the error:
<br>
<p><span class="quotelev3"> &gt;&gt;&gt; import minimpi
</span><br>
python: symbol lookup error: /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int
<br>
<p>I'd like to experiment with adding some other ldflags / libs into the  
<br>
build process.  How do I do that?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8184.php">Jeff Squyres: "Re: [OMPI users] mingw"</a>
<li><strong>In reply to:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
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
