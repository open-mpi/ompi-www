<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 18 05:54:33 2005" -->
<!-- isoreceived="20051118105433" -->
<!-- sent="Fri, 18 Nov 2005 11:54:29 +0100" -->
<!-- isosent="20051118105429" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[O-MPI users] --with-wrapper-ldflags question" -->
<!-- id="437DB2E5.5030209_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-18 05:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Reply:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p><p>&nbsp;&nbsp;Hi,
<br>
<p>I have a question about the --with-wrapper-ldflags option;
<br>
<p>I need to pass 2 different rpaths to the wrapper compilers,
<br>
so I tried
<br>
<p>- --with-wrapper-ldflags=&quot;-Wl,-rpath -Wl,pathA -Wl,-rpath -Wl,pathB&quot;
<br>
<p>However, it seems that the second Wl,-rpath gets filtered out.
<br>
<p>(config/ompi_setup_wrappers.m4 contains a call to OMPI_UNIQUE for the flags)
<br>
<p>The result is that mpicc/c++/... is no longer functional because the
<br>
linker gets passed a -Wl,-rpath -Wl,pathA -Wl,pathB ...
<br>
<p>Is this intentional?
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p><p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.1 (GNU/Linux)
<br>
<p>iD8DBQFDfbLlv/8puanD4GoRAgz1AKCMfNlPm/52nrZWb02To4aBuGgPDwCdH4bk
<br>
2DdwElV3JUyWWX7g3h6kypc=
<br>
=E7wZ
<br>
-----END PGP SIGNATURE-----
<br>
<p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Reply:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
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
