<?
$subject_val = "[OMPI users] Is Iprobe fast when there is no message to recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 22:43:58 2009" -->
<!-- isoreceived="20091002024358" -->
<!-- sent="Thu, 01 Oct 2009 19:43:53 -0700" -->
<!-- isosent="20091002024353" -->
<!-- name="Peter Lonjers" -->
<!-- email="plonjers_at_[hidden]" -->
<!-- subject="[OMPI users] Is Iprobe fast when there is no message to recieve" -->
<!-- id="1254451433.15684.34.camel_at_peter-laptop" -->
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
<strong>Subject:</strong> [OMPI users] Is Iprobe fast when there is no message to recieve<br>
<strong>From:</strong> Peter Lonjers (<em>plonjers_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 22:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Reply:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure if this is the right place the ask this question but here
<br>
it goes.
<br>
<p>Simplified abstract version of the question.
<br>
I have 2 MPI processes and I want one to make an occasional signal to
<br>
the other process.  These signals will not happen at predictable times.
<br>
I want the other process sitting in some kind of work loop to be able to
<br>
make a very fast check to see if a signal has been sent to it.
<br>
<p>What is the best way to do this.
<br>
<p>Actual problem
<br>
I am working on a realistic neural net simulator. The neurons are split
<br>
into groups with one group to each processor to simulate them.
<br>
Occasionally a neuron will spike and have to send that message to
<br>
neurons on a different processor. This is a relatively rare event. The
<br>
receiving neurons need to be able to make a very fast check to see if
<br>
there is a message from neurons on another processor.
<br>
<p>The way I am doing it now is to use simple send and receive commands.
<br>
The receiving cell does an iprobe check on every loop through  the
<br>
simulation for every cell that connects to it to see if there is a
<br>
message(spike) from that cell. If the iprobe says there is a message is
<br>
does a receive on that message. 
<br>
<p>This seems convoluted though. I do not actually need to receive the
<br>
message just know that a message is there. And it seems like depending
<br>
on how Iprobe works there might be a faster method. 
<br>
<p>Is Iprobe fast if there is no message to receive?
<br>
Would persistent connections work better?
<br>
<p><p><p>Anyway any help would be greatly appreciated.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Reply:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
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
