<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 10:29:25 2009" -->
<!-- isoreceived="20090224152925" -->
<!-- sent="Tue, 24 Feb 2009 16:29:06 +0100" -->
<!-- isosent="20090224152906" -->
<!-- name="michael.meinel_at_[hidden]" -->
<!-- email="michael.meinel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
<!-- id="924CDB255A147C48B23D75C97EBC94111F5262_at_exbe04.intra.dlr.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
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
<strong>From:</strong> <a href="mailto:michael.meinel_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20in%201.3%20loading%20shared%20libs%20when%20using%20VampirServer"><em>michael.meinel_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-02-24 10:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8179.php">Ralph Castain: "Re: [OMPI users] installation of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="8177.php">j artieda: "[OMPI users] mingw"</a>
<li><strong>Maybe in reply to:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a runtime-linking problem with MPI 1.3 that is very similar.
<br>
<p>We apply MPI in a Python-based framework. For some platforms we use a
<br>
patched Python version that does the MPI_Init() call.
<br>
On some machines we use an unmodified Python with a small module
<br>
(minimpi) that cares for the MPI_Init/Finalize calls.
<br>
<p>Starting with OpenMPI 1.3 the minimpi module crashes with the error
<br>
&quot;.../mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int&quot;.
<br>
<p>Upon further investigation, it seems to be a problem similar to this:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2005/09/0359.php">http://www.open-mpi.org/community/lists/devel/2005/09/0359.php</a>
<br>
The dynamic parts of the library are however no more linked against
<br>
their frameworks.
<br>
<p>Is there a chance, that another student will do this job? Or are there
<br>
any practical hints on how to solve this problem?
<br>
<p>To try it out yourself, please feel free to use the attached code.
<br>
&nbsp;* Make sure to adapt the pathes to your OpenMPI implementation in
<br>
setup.py
<br>
&nbsp;* Run &quot;setup.py install&quot;
<br>
&nbsp;* Start Python
<br>
&nbsp;* type &quot;import minimpi&quot; and the application should crash.
<br>
<p>Regards, Michael Meinel
<br>
<p>PS: Please excuse the absence of any citations but I just joined the
<br>
list (due to this problem).
<br>
<p><pre>
---
German Aerospace Center (DLR) in the Helmholtz-Association
Center for Computer Applications in Aerospace Science and Engineering
Brunswick, Germany

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8178/minimpi.tar.gz">minimpi.tar.gz</a>
</ul>
<!-- attachment="minimpi.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8179.php">Ralph Castain: "Re: [OMPI users] installation of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="8177.php">j artieda: "[OMPI users] mingw"</a>
<li><strong>Maybe in reply to:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8180.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
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
