<?
$subject_val = "[OMPI users] Problems using mpi with cmake";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 03:51:48 2008" -->
<!-- isoreceived="20081111085148" -->
<!-- sent="Tue, 11 Nov 2008 09:51:56 +0100" -->
<!-- isosent="20081111085156" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="[OMPI users] Problems using mpi with cmake" -->
<!-- id="A8360BEA2A9743EFAD2153299FDE22CF_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="826747.92320.qm_at_web56604.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems using mpi with cmake<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 03:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>Previous message:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>Reply:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to use mpi with cmake. I have created a file called 
<br>
FindMPI.cmake which I enclose here.
<br>
When I type:
<br>
<span class="quotelev1">&gt; cmake ../hell
</span><br>
I obtain:
<br>
<p>-- Found Boost: /usr/include
<br>
-- Found Xerces: /usr/lib/libxerces-c.so
<br>
-- Found MPI: /usr/lib/libmpi.so
<br>
-- Found LibXml++: 
<br>
/usr/lib/libxml++-2.6.so;/usr/lib/libxml2.so;/usr/lib/libglibmm-2.4.so;/usr/lib/libgobject-2.0.so;/usr/lib/libsigc-2.0.so
<br>
-- smoke/CMakelists.txt: forcing inclusion of test project
<br>
-- Configuring done
<br>
-- Generating done
<br>
-- Build files have been written to: /home/sofia/build
<br>
<p>But when I try to compile doing:
<br>
<span class="quotelev1">&gt;make dike_test
</span><br>
I obtain some errors, I enclose you the file.
<br>
<p>Do you what is the problem?
<br>
<p>Thank you very much.
<br>
<p>Sofia 
<br>
<p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<p><p>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7275/FindMPI.cmake">FindMPI.cmake</a>
</ul>
<!-- attachment="FindMPI.cmake" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7275/error.txt">error.txt</a>
</ul>
<!-- attachment="error.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>Previous message:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>Reply:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
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
