<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 13:19:28 2006" -->
<!-- isoreceived="20060523171928" -->
<!-- sent="Tue, 23 May 2006 11:19:06 -0600" -->
<!-- isosent="20060523171906" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9" -->
<!-- id="E2A5D310-C8A5-45EC-957B-BB1896CADDD4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44730673.1070303_at_fr.thalesgroup.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 13:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1259.php">Brian Barrett: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I compile with : mpicc pingpong.c -o pingpong
</span><br>
<span class="quotelev1">&gt; And when i try to launch it with : mpiexec -n 2 pingpong
</span><br>
<span class="quotelev1">&gt; I have this :
</span><br>
<span class="quotelev1">&gt; Je suis 0/2 on xpscp117892.tasfr.thales
</span><br>
<span class="quotelev1">&gt; Je suis 1/2 on xpscp117892.tasfr.thales
</span><br>
<span class="quotelev1">&gt; [xpscp117892.tasfr.thales:08216] mca_btl_sm_send: write fifo failed:
</span><br>
<span class="quotelev1">&gt; errno=9
</span><br>
<span class="quotelev1">&gt; Tour 4130968 : Envoye 'i' vers 1
</span><br>
<span class="quotelev1">&gt; Tour 4716696 : Recu 'i' de 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I don't understant why I have an error &quot;mca_btl........&quot;
</span><br>
<span class="quotelev1">&gt; PS: I'm working with only one PC
</span><br>
<p>The error message is saying that something failed in the shared  
<br>
memory transport.  Could you please send the output of ompi_info?  It  
<br>
would also be useful to know what operating system and compiler/ 
<br>
compiler version you used when compiling Open MPI.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1259.php">Brian Barrett: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
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
