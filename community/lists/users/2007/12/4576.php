<?
$subject_val = "Re: [OMPI users] Run a process double";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 15:35:42 2007" -->
<!-- isoreceived="20071202203542" -->
<!-- sent="Sun, 2 Dec 2007 12:35:37 -0800" -->
<!-- isosent="20071202203537" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run a process double" -->
<!-- id="5b7094580712021235h5ecb1961hed65c222c7364ad7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="474DF3A1.9020906_at_yahoo.com.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run a process double<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-02 15:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4577.php">Edgar Gabriel: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henry -
<br>
<p>OpenMP and OpenMPI are two different things.  OpenMP is a way to
<br>
automatically (in limited situations) parallelize your code using a
<br>
threading model.  OpenMPI is an MPI implementation.  MPI is a message
<br>
passing standard, which usually parallelizes computation on a process
<br>
basis.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Nov 28, 2007 3:02 PM, Henry Adolfo Lambis Miranda
<br>
&lt;henrylambis_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi everybody out there.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my first post to the mail list.
</span><br>
<span class="quotelev1">&gt; I have installed openmp 1.2.4 over a x_64 AMD double processor with SuSE
</span><br>
<span class="quotelev1">&gt; linux.
</span><br>
<span class="quotelev1">&gt; In principal, the instalation was succefull, with ifort 10.X.
</span><br>
<span class="quotelev1">&gt; But when i run any code ( mpirun -np 2 a.out), instead of share the
</span><br>
<span class="quotelev1">&gt; calcules between the two
</span><br>
<span class="quotelev1">&gt; processor, the system duplicate the executable and send one to each
</span><br>
<span class="quotelev1">&gt; processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i don&#180;t know what the h$%&amp; is going on......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Henry Adolfo Lambis Miranda,Chem.Eng.
</span><br>
<span class="quotelev1">&gt; Molecular Simulation Group  I &amp; II
</span><br>
<span class="quotelev1">&gt; Rovira i Virgili University.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.etseq.urv.es/ms">http://www.etseq.urv.es/ms</a>
</span><br>
<span class="quotelev1">&gt; Av. Pa?sos Catalans, 26
</span><br>
<span class="quotelev1">&gt; C.P. 43007. Tarragona, Catalunya
</span><br>
<span class="quotelev1">&gt; Espanya.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;No podr?s quedarte en casa, hermano.
</span><br>
<span class="quotelev1">&gt; No podr?s encender, apagar y olvidarte
</span><br>
<span class="quotelev1">&gt; (....) Porque la revoluci?n no ser? televisada&quot;.
</span><br>
<span class="quotelev1">&gt; Gil Scott-Heron (The Revolution Will Not Be Televised, 1974)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Es una cosa bastante repugnante el exito. Su falsa semejanza con el merito enga?a a los hombres. -- Victor Hugo. (1802-1885) Novelista franc?s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El militar es una planta que hay que cuidar con esmero para que no de sus frutos. -- Jacques Tati.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;La libertad viene en paquetes peque?os, usualmente TCP/IP&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Colombian Reality bite:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.youtube.com/watch?v=jn3vM_5kIgM">http://www.youtube.com/watch?v=jn3vM_5kIgM</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Cartagena,_Colombia">http://en.wikipedia.org/wiki/Cartagena,_Colombia</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.youtube.com/watch?v=cvxMWSsrwg0">http://www.youtube.com/watch?v=cvxMWSsrwg0</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.youtube.com/watch?v=eVmYf5U6x3k">http://www.youtube.com/watch?v=eVmYf5U6x3k</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Pregunt&#225;. Respond&#233;. Descubr&#237;.
</span><br>
<span class="quotelev1">&gt; Todo lo que quer&#237;as saber, y lo que ni imaginabas,
</span><br>
<span class="quotelev1">&gt; est&#225; en Yahoo! Respuestas (Beta).
</span><br>
<span class="quotelev1">&gt; &#161;Probalo ya!
</span><br>
<span class="quotelev1">&gt; <a href="http://www.yahoo.com.ar/respuestas">http://www.yahoo.com.ar/respuestas</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4577.php">Edgar Gabriel: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
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
