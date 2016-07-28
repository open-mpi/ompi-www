<?
$subject_val = "[OMPI users] libtool *.la files with references to install dir";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 10:19:14 2013" -->
<!-- isoreceived="20130503141914" -->
<!-- sent="Fri, 3 May 2013 16:19:03 +0200" -->
<!-- isosent="20130503141903" -->
<!-- name="Stefan Friedel" -->
<!-- email="stefan.friedel_at_[hidden]" -->
<!-- subject="[OMPI users] libtool *.la files with references to install dir" -->
<!-- id="20130503141903.GL7147_at_woyzeck" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Stefan Friedel (<em>stefan.friedel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 10:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21837.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message queue in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21843.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Reply:</strong> <a href="21843.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
when installing openmpi-1.6.4 (`cd /root/openmpi-1.6.4; ./configure --prefix=/usr/opt/openmpi-1.6.4/gcc-4.7.2/mxib --with-openib --with-mx=/opt/mx/1.2.16/3.2.0-4-amd64 --with-slurm; make; make install`)
<br>
we found some references to non-existing paths in *.la files as in the
<br>
following example:
<br>
<p>`cat /usr/opt/openmpi-1.6.4/gcc-4.7.2/mxib/lib/libmpi.la` (this is the
<br>
installed version of openmpi after the `make install` from above):
<br>
<p>...
<br>
dependency_libs=' -L/root/openmpi-1.6.4/opal/mca/hwloc/hwloc132/hwloc/src  -ldl -lrt -lnsl -lutil -lm'
<br>
...
<br>
<p>Now applications using GNU libtool will stop here during their
<br>
compilation with an error because this path (which is a subdirectory of
<br>
the path were I compiled openmpi on a different system!) does not exist.
<br>
(And even if it would exist this would lead to a &quot;permission denied&quot;
<br>
error because /root is not readable ...and finally there are no libs in
<br>
the src directory /root/openmpi-1.6.4/opal/mca/hwloc/hwloc132/hwloc/src).
<br>
<p># are the *.la files necessary at all?
<br>
(probably the answer is no: we tested this by deleting all *.la files in
<br>
/usr/opt/openmpi-1.6.4  and it helped: application is compiling+running)
<br>
<p># why are these references inside the *.la files?
<br>
<p>Thanks for hints-
<br>
MfG/Sincerely,
<br>
Stefan Friedel
<br>
<pre>
--
IWR * 523 * INF 368 * 69120 Heidelberg
T +49 6221 548240 * F +49 6221 545224
stefan.friedel_at_[hidden]

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-21838/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21839.php">Angel de Vicente: "[OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<li><strong>Previous message:</strong> <a href="21837.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message queue in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21843.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Reply:</strong> <a href="21843.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
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
