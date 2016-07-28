<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 28 04:32:15 2006" -->
<!-- isoreceived="20060828083215" -->
<!-- sent="Mon, 28 Aug 2006 09:32:09 +0100" -->
<!-- isosent="20060828083209" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI error in the simplest configuration..." -->
<!-- id="f058a9c30608280132v542f6311yed708c26b474a025_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f869b68c0608271011m29149e5frae832da071f7572e_at_mail.gmail.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-28 04:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1781.php">Durga Choudhury: "[OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>In reply to:</strong> <a href="1781.php">Durga Choudhury: "[OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>On 8/27/06, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting an error (details follow) in the simplest of the possible
</span><br>
<span class="quotelev1">&gt; test scenarios:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two identical regular Dell PCs connected back-to-back via an ethernet
</span><br>
<span class="quotelev1">&gt; switch on the 10/100 ethernet. Both run Fedora Core 4. Identical version (
</span><br>
<span class="quotelev1">&gt; 1.1) of Open MPI is compiled and installed on both of them *without* a
</span><br>
<span class="quotelev1">&gt; --prefix option ( i.e. installed on the default location of /usr/local).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hostfile on both the machine is the same:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat ~/hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.22.29
</span><br>
<span class="quotelev1">&gt; 192.168.22.103
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run openMPI on either of these two machines by forking two
</span><br>
<span class="quotelev1">&gt; processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np2 osu_acc_latency  &lt;------ This runs fine on either of the two
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I try to luch the same program across the two machines, I
</span><br>
<span class="quotelev1">&gt; get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile ~/hostfile -np2 /home/durga/openmpi-1.1
</span><br>
<span class="quotelev1">&gt; /osu_benchmarks/osu_acc_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; durga_at_192.168.22.29's &lt;durga_at_192.168.22.29%27s&gt; password: foobar
</span><br>
<span class="quotelev1">&gt; /home/durga/openmpi-1.1/osu_benchmarks/osu_acc_latency: error while
</span><br>
<span class="quotelev1">&gt; loading shared libraries: libmpi.so.0: cannot open shared object file: No
</span><br>
<span class="quotelev1">&gt; such file or directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the file *does exist* in /usr/local/lib:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls -l /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried adding /usr/local/lib to my LD_LIBRARY_PATH on *both*
</span><br>
<span class="quotelev1">&gt; machines, to no avail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>first of: I'm not from the  openMPI team.
<br>
Where did you add your LD_LIBRARY_PATH ?
<br>
make shure it is in one of the profile files for your shell.. such has:
<br>
.bash_profile and _not_ .bashrc
<br>
<p>that's a tipical error in these kind of configurations..
<br>
<p>best regards
<br>
<p>Any help is greatly appreciated.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1781.php">Durga Choudhury: "[OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>In reply to:</strong> <a href="1781.php">Durga Choudhury: "[OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
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
