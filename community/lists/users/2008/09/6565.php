<?
$subject_val = "[OMPI users] mpirun hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 06:53:27 2008" -->
<!-- isoreceived="20080917105327" -->
<!-- sent="Wed, 17 Sep 2008 12:53:22 +0200" -->
<!-- isosent="20080917105322" -->
<!-- name="Christophe Spaggiari" -->
<!-- email="christophe.spaggiari_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hang" -->
<!-- id="f2843b810809170353x40b516b1w89eb7a9390903d17_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hang<br>
<strong>From:</strong> Christophe Spaggiari (<em>christophe.spaggiari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 06:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6564.php">Santolo Felaco: "[OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Reply:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am new to MPI and try to get my Open MPI environment up and running. I
<br>
have two machines Alpha and Beta, on which I have successfully installed
<br>
Open MPI in /usr/local/openmpi. I have made the ssh setting to not have to
<br>
enter password manually (using rsa keys), and I have modified the .rc files
<br>
to get the right path and right LD_LIBRARY_PATH when login using ssh on both
<br>
machines.
<br>
<p>In order to check if my installation was working I have started &quot;mpirun
<br>
hostname&quot; on Alpha and it is working just fine.
<br>
I have tested as well &quot;mpirun hostname&quot; on Beta and it is working fine too.
<br>
<p>I have tested &quot;ssh beta env&quot; to check that my setting are correct and it is
<br>
working as expected.
<br>
<p>BUT when I am running &quot;mpirun -host beta hostname&quot; from Alpha nothing
<br>
happens. After several minutes I have to kill the &quot;mpirun&quot; process with
<br>
Ctrl-C (two times). Does any of you run into similar problem and could tell
<br>
me what I am doing wrong ? It seems that each local installation are working
<br>
fine but I can not start tasks on other nodes.
<br>
<p>The interesting point is that when I run a &quot;ps&quot; on Beta I can see that a
<br>
&quot;orted&quot; process is started (and stay in process list) for each of my try to
<br>
run &quot;mpirun&quot; command from Alpha. So somehow Beta gets the command to start
<br>
orted and does it but then, nothing happens .......
<br>
<p>I have been browsing the users list for similar issues and I found one guy
<br>
describing exactly the same problem but it was no answer to his post.
<br>
<p>Not sure if this is relevant but Alpha and Beta are Sony PS3 machines
<br>
running Yellow Dog Linux 6.1
<br>
<p>Thanks in advance for your help.
<br>
<p>Regards,
<br>
Chris
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6564.php">Santolo Felaco: "[OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Reply:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
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
