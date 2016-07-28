<?
$subject_val = "Re: [OMPI users] Problems using mpi with cmake";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 05:13:42 2008" -->
<!-- isoreceived="20081111101342" -->
<!-- sent="Tue, 11 Nov 2008 11:13:53 +0100" -->
<!-- isosent="20081111101353" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using mpi with cmake" -->
<!-- id="D6ED085F3B7844B183B224B1406D382A_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A8360BEA2A9743EFAD2153299FDE22CF_at_aparicio1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using mpi with cmake<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 05:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>Previous message:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<li><strong>In reply to:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Finally I have solved the problem.
<br>
<p>Thanks a lot.
<br>
<p>Sofia
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, November 11, 2008 9:51 AM
<br>
Subject: [OMPI users] Problems using mpi with cmake
<br>
<p><p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to use mpi with cmake. I have created a file called
</span><br>
<span class="quotelev1">&gt; FindMPI.cmake which I enclose here.
</span><br>
<span class="quotelev1">&gt; When I type:
</span><br>
<span class="quotelev2">&gt;&gt; cmake ../hell
</span><br>
<span class="quotelev1">&gt; I obtain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Found Boost: /usr/include
</span><br>
<span class="quotelev1">&gt; -- Found Xerces: /usr/lib/libxerces-c.so
</span><br>
<span class="quotelev1">&gt; -- Found MPI: /usr/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; -- Found LibXml++:
</span><br>
<span class="quotelev1">&gt; /usr/lib/libxml++-2.6.so;/usr/lib/libxml2.so;/usr/lib/libglibmm-2.4.so;/usr/lib/libgobject-2.0.so;/usr/lib/libsigc-2.0.so
</span><br>
<span class="quotelev1">&gt; -- smoke/CMakelists.txt: forcing inclusion of test project
</span><br>
<span class="quotelev1">&gt; -- Configuring done
</span><br>
<span class="quotelev1">&gt; -- Generating done
</span><br>
<span class="quotelev1">&gt; -- Build files have been written to: /home/sofia/build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I try to compile doing:
</span><br>
<span class="quotelev2">&gt;&gt;make dike_test
</span><br>
<span class="quotelev1">&gt; I obtain some errors, I enclose you the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you what is the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>--------------------------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<p><p><p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>Previous message:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<li><strong>In reply to:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
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
