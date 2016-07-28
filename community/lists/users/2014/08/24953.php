<?
$subject_val = "[OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 11:16:51 2014" -->
<!-- isoreceived="20140810151651" -->
<!-- sent="Sun, 10 Aug 2014 12:16:53 -0300 (ART)" -->
<!-- isosent="20140810151653" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.8.1: &amp;quot;make all&amp;quot; error: symbol `Lhwloc1' is already defined" -->
<!-- id="360446735.872.1407683813535.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1391335028.631.1407680417599.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined<br>
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 11:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24952.php">James Barron: "[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Reply:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Reply:</strong> <a href="24975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to re-compile Open MPI 1.8.1 version for Linux 
<br>
on an ia32 machine with Fedora 14 although using the 
<br>
last version of Gfortran (Gfortran 4.10 is required 
<br>
by a user program which runs ok).
<br>
<p>However, the &quot;make all&quot; phase breaks with the 
<br>
error message:
<br>
<p>&nbsp;&nbsp;Error: symbol `Lhwloc1' is already defined
<br>
<p>I attached a tgz file (tar -zcvf) with:
<br>
<p>&nbsp;&nbsp;Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
<br>
&nbsp;&nbsp;The &quot;config.log&quot; file from the top-level Open MPI directory;
<br>
&nbsp;&nbsp;Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
<br>
&nbsp;&nbsp;Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
<br>
&nbsp;&nbsp;Outputs from cat /proc/version and cat /proc/cpuinfo
<br>
<p>Please, any clue in order to fix?
<br>
<p>Regards in advance.
<br>
Jorge.
<br>
<p><pre>
-- 
CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69

</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24953/symbol-already-defined.tgz">symbol-already-defined.tgz</a>
</ul>
<!-- attachment="symbol-already-defined.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24952.php">James Barron: "[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Reply:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Reply:</strong> <a href="24975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
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
