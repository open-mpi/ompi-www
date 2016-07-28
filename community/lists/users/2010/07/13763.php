<?
$subject_val = "Re: [OMPI users] Communication between objects on different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 11:55:57 2010" -->
<!-- isoreceived="20100723155557" -->
<!-- sent="Fri, 23 Jul 2010 11:55:31 -0400" -->
<!-- isosent="20100723155531" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication between objects on different nodes" -->
<!-- id="AANLkTimzQRUDcSnHmWp9v-Wa9W6xPzoMiDNyi_Mq=1k1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikLp-3z1GGx1U0etLvT09OkAqwS+TjqTT9Vuxyc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communication between objects on different nodes<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 11:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
<li><strong>In reply to:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also forgot to add that one of the bonus requirements for my project is to
<br>
be able to use it with whatever number of slave nodes, which i think makes
<br>
the whole deal a lot more complicated.
<br>
<p>On Fri, Jul 23, 2010 at 11:48 AM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hey guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to write an implementation of a 4D array with a variable 4th
</span><br>
<span class="quotelev1">&gt; dimension based on where in 3D you are. So it's basically like a normal
</span><br>
<span class="quotelev1">&gt; rectangular prism, except for each unit it might have a variable number of
</span><br>
<span class="quotelev1">&gt; values. The program is also supposed to communicate by sending ghost nodes
</span><br>
<span class="quotelev1">&gt; between each slice, in order for the actual data-modifying code to work. The
</span><br>
<span class="quotelev1">&gt; data-modifying code is to be added by others depending on what they need to
</span><br>
<span class="quotelev1">&gt; do with this 4d array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So what I am really asking is how does MPI work when you have different
</span><br>
<span class="quotelev1">&gt; objects on different computers and you try sending stuff between the
</span><br>
<span class="quotelev1">&gt; objects?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just some explanations for my code, which is attached, in case you can give
</span><br>
<span class="quotelev1">&gt; some code-specific tips:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - Nx2, Nz2, Ny2 are the lengths of the big prism
</span><br>
<span class="quotelev1">&gt;    - DOFArr holds how many values there will be for each space in 3D, by
</span><br>
<span class="quotelev1">&gt;    transforming the 3D coordinates into 1D this way: index of
</span><br>
<span class="quotelev1">&gt;    DOFArr=i+Nx*j+Nx*Ny*k
</span><br>
<span class="quotelev1">&gt;    - So the way i was thinking of doing is for the master to get the big
</span><br>
<span class="quotelev1">&gt;    array, and split into relatively equal parts and send each part to a node.
</span><br>
<span class="quotelev1">&gt;    The node would then do whatever it had to do, send ghost nodes to its
</span><br>
<span class="quotelev1">&gt;    neighbors, maybe do whatever it had to do again and in the end it would send
</span><br>
<span class="quotelev1">&gt;    everything back to the master node, which would take the pieces of array and
</span><br>
<span class="quotelev1">&gt;    put them together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also a bit confused with when do you have to call MPI_Finaliza(). I
</span><br>
<span class="quotelev1">&gt; mean, for it to run, the program required me to put it into the constructor,
</span><br>
<span class="quotelev1">&gt; and if I call print() at the and of the constructor, it would tell me this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; job aborted:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: node: exit code[: error message]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0: C7June2010: 123
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: C7June2010: -1073740777: process 1 exited without calling finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2: C7June2010: -1073740777: process 2 exited without calling finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i would place it after Finalize() nothing would show when i run the exe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just finished grade 12, and got a summer job at a research lab, and this
</span><br>
<span class="quotelev1">&gt; is my project. Thanks a lot for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
<li><strong>In reply to:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
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
