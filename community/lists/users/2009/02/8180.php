<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 10:55:23 2009" -->
<!-- isoreceived="20090224155523" -->
<!-- sent="Tue, 24 Feb 2009 10:55:16 -0500" -->
<!-- isosent="20090224155516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
<!-- id="ED7641CE-021D-47F7-AC8F-A430FA12171D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="924CDB255A147C48B23D75C97EBC94111F5262_at_exbe04.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 10:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8179.php">Ralph Castain: "Re: [OMPI users] installation of open-mpi"</a>
<li><strong>In reply to:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 10:29 AM, &lt;michael.meinel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a runtime-linking problem with MPI 1.3 that is very similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We apply MPI in a Python-based framework. For some platforms we use a
</span><br>
<span class="quotelev1">&gt; patched Python version that does the MPI_Init() call.
</span><br>
<span class="quotelev1">&gt; On some machines we use an unmodified Python with a small module
</span><br>
<span class="quotelev1">&gt; (minimpi) that cares for the MPI_Init/Finalize calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting with OpenMPI 1.3 the minimpi module crashes with the error
</span><br>
<span class="quotelev1">&gt; &quot;.../mca_paffinity_linux.so: undefined symbol:  
</span><br>
<span class="quotelev1">&gt; mca_base_param_reg_int&quot;.
</span><br>
<p>Sounds like the same dynamic linker issue.
<br>
<p><span class="quotelev1">&gt; Upon further investigation, it seems to be a problem similar to this:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2005/09/0359.php">http://www.open-mpi.org/community/lists/devel/2005/09/0359.php</a>
</span><br>
<span class="quotelev1">&gt; The dynamic parts of the library are however no more linked against
</span><br>
<span class="quotelev1">&gt; their frameworks.
</span><br>
<p>I looked at your tarball -- I don't know anything about Python, so I  
<br>
don't fully understand it.  Where does it load in libmpi?
<br>
<p><span class="quotelev1">&gt; To try it out yourself, please feel free to use the attached code.
</span><br>
<span class="quotelev1">&gt; * Make sure to adapt the pathes to your OpenMPI implementation in
</span><br>
<span class="quotelev1">&gt; setup.py
</span><br>
<span class="quotelev1">&gt; * Run &quot;setup.py install&quot;
</span><br>
<span class="quotelev1">&gt; * Start Python
</span><br>
<span class="quotelev1">&gt; * type &quot;import minimpi&quot; and the application should crash.
</span><br>
<p>I had to change your code slightly for my version of python (probably  
<br>
ancient -- whatever ships in RHEL4):
<br>
<p>#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Py_RETURN_TRUE;
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return PyBool_FromInt(1);
<br>
#endif
<br>
<p>I then was able to &quot;./setup.py install&quot; properly.  It looks like you  
<br>
also need to setenv PYTHON_MPI_INIT to some non-empty value as well;  
<br>
otherwise minimpi.py raises an error at import time.
<br>
<p>[7:53] svbu-mpi:/home/jsquyres/minimpi % sudo ./setup.py install
<br>
running install
<br>
running build
<br>
running build_py
<br>
creating build
<br>
creating build/lib.linux-x86_64-2.3
<br>
copying minimpi.py -&gt; build/lib.linux-x86_64-2.3
<br>
running build_ext
<br>
building 'minimpiext' extension
<br>
creating build/temp.linux-x86_64-2.3
<br>
gcc -pthread -fno-strict-aliasing -DNDEBUG -O2 -g -pipe -m64 - 
<br>
D_GNU_SOURCE -fPIC -fPIC -I/home/jsquyres/bogus/include -I/usr/include/ 
<br>
python2.3 -c minimpiext.c -o build/temp.linux-x86_64-2.3/minimpiext.o
<br>
minimpiext.c: In function `finalize':
<br>
minimpiext.c:91: warning: return makes pointer from integer without a  
<br>
cast
<br>
gcc -pthread -shared build/temp.linux-x86_64-2.3/minimpiext.o -L/home/ 
<br>
jsquyres/bogus/lib -lmpi -o build/lib.linux-x86_64-2.3/minimpiext.so
<br>
running install_lib
<br>
copying build/lib.linux-x86_64-2.3/minimpiext.so -&gt; /usr/lib64/ 
<br>
python2.3/site-packages
<br>
[7:54] svbu-mpi:/home/jsquyres/minimpi % python
<br>
Python 2.3.4 (#1, Feb  6 2006, 10:38:45)
<br>
[GCC 3.4.5 20051201 (Red Hat 3.4.5-2)] on linux2
<br>
Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.
<br>
<span class="quotelev3"> &gt;&gt;&gt; import minimpi
</span><br>
<span class="quotelev3"> &gt;&gt;&gt;
</span><br>
<p>It didn't seem to crash for me -- is there something else I should  
<br>
do?  (I know little/nothing about Python)
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
<li><strong>Next message:</strong> <a href="8181.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8179.php">Ralph Castain: "Re: [OMPI users] installation of open-mpi"</a>
<li><strong>In reply to:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8183.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
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
