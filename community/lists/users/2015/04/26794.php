<?
$subject_val = "[OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 14:17:36 2015" -->
<!-- isoreceived="20150427181736" -->
<!-- sent="Mon, 27 Apr 2015 11:17:35 -0700" -->
<!-- isosent="20150427181735" -->
<!-- name="Walt Brainerd" -->
<!-- email="walt.brainerd_at_[hidden]" -->
<!-- subject="[OMPI users] Configure failure" -->
<!-- id="CAPsJ1Nbk1O3XFUhO7wnpRSsbBAadWpJfpYRGfik_juuPaBaOWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Configure failure<br>
<strong>From:</strong> Walt Brainerd (<em>walt.brainerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 14:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26793.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to be able to do Coarrays in Fortran and am
<br>
waiting for gfortran 5.1 in cygwin. In the meantime, I thought
<br>
I would try to build Openmpi and see if it might work with a
<br>
Mingw. Configure failed and the ^M looks strange to me and
<br>
thought you all might want to see it. Here is a little piece of
<br>
the configure log. A compressed version is attached.
<br>
<p>Up-to-date cygwin on Windows 8.1.
<br>
<p>Any advice on how (or whether) I can do this would be appreciated.
<br>
Thanks.
<br>
<p>configure:33415: checking size of Fortran CHARACTER
<br>
configure:33483: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-alia
<br>
sing -I. -c conftest.c
<br>
configure:33490: $? = 0
<br>
configure:33500: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33507: $? = 0
<br>
configure:33551: ./conftest
<br>
configure:33558: $? = 0
<br>
configure:33574: result: 1^M
<br>
&lt;----------------------------------------------------------------------------------
<br>
configure:33597: checking for C type corresponding to CHARACTER
<br>
configure:33643: result: not found
<br>
configure:33647: WARNING: *** Did not find corresponding C type
<br>
configure:33650: error: Cannot continue
<br>
<p><pre>
-- 
Walt Brainerd

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26794/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26793.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
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
