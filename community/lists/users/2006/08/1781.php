<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 27 13:11:24 2006" -->
<!-- isoreceived="20060827171124" -->
<!-- sent="Sun, 27 Aug 2006 13:11:18 -0400" -->
<!-- isosent="20060827171118" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI error in the simplest configuration..." -->
<!-- id="f869b68c0608271011m29149e5frae832da071f7572e_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-27 13:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1780.php">Reinhold Bader: "[OMPI users] Follow-on to previous mail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I am getting an error (details follow) in the simplest of the possible test
<br>
scenarios:
<br>
<p>Two identical regular Dell PCs connected back-to-back via an ethernet switch
<br>
on the 10/100 ethernet. Both run Fedora Core 4. Identical version (1.1) of
<br>
Open MPI is compiled and installed on both of them *without* a --prefix
<br>
option (i.e. installed on the default location of /usr/local).
<br>
<p>The hostfile on both the machine is the same:
<br>
<p>cat ~/hostfile
<br>
<p>192.168.22.29
<br>
192.168.22.103
<br>
<p>I can run openMPI on either of these two machines by forking two processes:
<br>
<p>mpirun -np2 osu_acc_latency  &lt;------ This runs fine on either of the two
<br>
machines.
<br>
<p>However, when I try to luch the same program across the two machines, I get
<br>
an error:
<br>
<p>mpirun --hostfile ~/hostfile -np2 /home/durga/openmpi-1.1
<br>
/osu_benchmarks/osu_acc_latency
<br>
<p>durga_at_192.168.22.29's password: foobar
<br>
/home/durga/openmpi-1.1/osu_benchmarks/osu_acc_latency: error while loading
<br>
shared libraries: libmpi.so.0: cannot open shared object file: No such file
<br>
or directory.
<br>
<p>However, the file *does exist* in /usr/local/lib:
<br>
<p>ls -l /usr/local/lib/libmpi.so.0
<br>
libmpi.so.0 -&gt; libmpi.so.0.0.0
<br>
<p>I have also tried adding /usr/local/lib to my LD_LIBRARY_PATH on *both*
<br>
machines, to no avail.
<br>
<p>Any help is greatly appreciated.
<br>
<p>Thanks
<br>
<p>Durga
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1780.php">Reinhold Bader: "[OMPI users] Follow-on to previous mail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1782.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Reply:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
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
