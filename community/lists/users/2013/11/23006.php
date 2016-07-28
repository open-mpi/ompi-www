<?
$subject_val = "Re: [OMPI users] MPI Java bindings compile errors and missingdatatype";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 19 06:57:09 2013" -->
<!-- isoreceived="20131119115709" -->
<!-- sent="Tue, 19 Nov 2013 12:50:18 +0100 (CET)" -->
<!-- isosent="20131119115018" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Java bindings compile errors and missingdatatype" -->
<!-- id="201311191150.rAJBoHtP008032_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI Java bindings compile errors and missingdatatype" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Java bindings compile errors and missingdatatype<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-19 06:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Christoffer,
<br>
<p><span class="quotelev1">&gt; As for the MPI.OBJECT issue: we completely revamped the Java bindings to
</span><br>
<span class="quotelev1">&gt; (a) improve performance (they are now much, much closer to the C
</span><br>
<span class="quotelev1">&gt; performance) and to make them better conform to the Java language standard
</span><br>
<span class="quotelev1">&gt; terminology. So we are no longer compatible with the old mpiJava library -
</span><br>
<span class="quotelev1">&gt; not only because of the APIs, but also because the new implementation is
</span><br>
<span class="quotelev1">&gt; MPI-3 compliant.
</span><br>
...
<br>
<span class="quotelev2">&gt; &gt; After this I tried some other tests using the MPI.OBJECT datatype, just to
</span><br>
<span class="quotelev2">&gt; &gt; discover that it wasn't supported. I saw that it was included in mpiJava
</span><br>
<span class="quotelev2">&gt; &gt; 1.2 and the current mpiJava in OMPI is 1.1(?). I guess the java bindings
</span><br>
<span class="quotelev2">&gt; &gt; aren't that prioritized?
</span><br>
<p>I don't know how you use MPI.OBJECT, but I have ported some small
<br>
programs, which used MPI.OBJECT to the new interface with structures.
<br>
You can compile and run a program with the following commands:
<br>
<p>mpijavac -d $HOME/mpi_classfiles BcastStructArrayMain.java
<br>
mpiexec -np 3 java -cp $HOME/mpi_classfiles BcastStructArrayMain
<br>
<p>Perhaps you get an idea how you can port your MPI.OBJECT programs,
<br>
when you look at my small example programs.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>



<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23006/MyStruct.java">MyStruct.java</a>
</ul>
<!-- attachment="MyStruct.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23006/BcastStructMain.java">BcastStructMain.java</a>
</ul>
<!-- attachment="BcastStructMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23006/BcastStructArrayMain.java">BcastStructArrayMain.java</a>
</ul>
<!-- attachment="BcastStructArrayMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23006/ScatterStructArrayMain.java">ScatterStructArrayMain.java</a>
</ul>
<!-- attachment="ScatterStructArrayMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23007.php">Siegmar Gross: "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<!-- nextthread="start" -->
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
