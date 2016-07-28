<?
$subject_val = "[OMPI users] bug of openmpi-1.3b3r20000";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 04:42:50 2008" -->
<!-- isoreceived="20081212094250" -->
<!-- sent="Fri, 12 Dec 2008 01:42:45 -0800 (PST)" -->
<!-- isosent="20081212094245" -->
<!-- name="Catrina Nguyen" -->
<!-- email="nguyencatrina_at_[hidden]" -->
<!-- subject="[OMPI users] bug of openmpi-1.3b3r20000" -->
<!-- id="275813.77675.qm_at_web111215.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] bug of openmpi-1.3b3r20000<br>
<strong>From:</strong> Catrina Nguyen (<em>nguyencatrina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 04:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
I use openmpi-1.3b3r20000 and blcr-0.7.3 to run my application on 2 nodes. I configure openmpi to run on 2 nodes for default. 
&#160;I want to use checkpoint/restart functionalities, so I use this command to configure openmpi:
# .configure --with-devel-headers --with-ft=cr --with-blcr=&lt;path_to_blcr&gt;
First: I run application well with this command &quot;mpitun -np 4 &lt;my_app&gt;&quot;, but after checkpoint I can't restart application. The error return is bus error, signal 7. To fix it, you tell me add &quot;-mca btl ^sm&quot; to mpirun, it run well. But I want to know why. 
Second: I can't checkpoint application with --term option. Checkpoint command not return, snapshot be created but it wasn't returned to localhost. Daemon on remote node died before local snapshot returned, but processes on localhost not die.
Third: When I restart an application, I can't checkpoint this. Checkpoint command not return and restart process died with signal 13 (Broken Pipe).
With my first-class experience, I can't understand why, please help me.
Thank you
Catrina


      
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
