<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar  4 11:23:40 2006" -->
<!-- isoreceived="20060304162340" -->
<!-- sent="Sat, 4 Mar 2006 13:23:34 -0300" -->
<!-- isosent="20060304162334" -->
<!-- name="Leslie Watter" -->
<!-- email="watter_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI Applications" -->
<!-- id="62f43a280603040823x95866aeg_at_mail.gmail.com" -->
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
<strong>From:</strong> Leslie Watter (<em>watter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-04 11:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Jeff Squyres: "Re: [OMPI devel] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Reply:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Some time ago, I was trying to implement a new BTL to openmpi.
<br>
<p>Now it works here, but I need to test it.
<br>
<p>Someone (sorry, I've forgot who), told me to use NetPIPE to test the BTL layer.
<br>
Ok, I used it, but now I need some parallel applications that uses openmpi.
<br>
NetPIPE uses a ping-pong test between 2 machines to evaluate its test.
<br>
<p><p>If anybody could send me an application that uses openmpi,
<br>
I can return with the results after its execution.
<br>
<p>Why this? I need to compare the execution time just changing the BTL protocol.
<br>
<p>Here I have a cluster with 16 machines (Athlon 1.2 128RAM with
<br>
100Mbits ethernet and a 1Giga Switch), using openmpi-1.0 stable (with
<br>
modifications that include LLC BTL [ I plan to release my code in a
<br>
website as soon as I have the results and the analysis done. ].
<br>
<p>What kind of application I'm looking for?
<br>
- applications that uses TCP btl
<br>
- applications that can run in 2,4, 8 and/or 16 machines
<br>
- preferably applications that are message passing intensive (optional)
<br>
<p><p>Many Thanks
<br>
<p>Leslie
<br>
PS: I want to put the results of execution time in mine master thesis.
<br>
<p><pre>
--
Leslie H. Watter
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Jeff Squyres: "Re: [OMPI devel] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Reply:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
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
