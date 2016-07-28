<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 28 11:27:30 2006" -->
<!-- isoreceived="20060828152730" -->
<!-- sent="Mon, 28 Aug 2006 17:27:27 +0200" -->
<!-- isosent="20060828152727" -->
<!-- name="Gunnar Johansson" -->
<!-- email="gunjo81_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI error in the simplest configuration..." -->
<!-- id="c8c0af0608280827w6b9bf9bem13aff84eac19e528_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f869b68c0608280821r408a5494h7e2b8a87033c7f83_at_mail.gmail.com" -->
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
<strong>From:</strong> Gunnar Johansson (<em>gunjo81_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-28 11:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1785.php">Marcelo Stival: "[OMPI users] Short/long when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>In reply to:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>First off, I'm not a linux expert..
<br>
<p>On 8/28/06, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Miguel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two comments on your comments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Defining LD_LIBRARY_PATH should not be necessary in my case because the
</span><br>
<span class="quotelev1">&gt; libraries are in /usr/local/lib, a standard place for ld to look for shared
</span><br>
<span class="quotelev1">&gt; libs. I did not define PATH either and Linux is able to find the executable
</span><br>
<span class="quotelev1">&gt; MPI binaries in /usr/local/bin because it is a standard location for Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I defined LD_LIBRARY_PATH (regardless of whether it should be
</span><br>
<span class="quotelev1">&gt; necessary) manually, like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: export LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>..but since MPI executes your program in a &quot;new&quot; session (possibly by ssh)
<br>
it doesn't know of you currently exported variables. That's why you need to
<br>
put it in .bashrc to load it at every login. Correct me if I'm wrong,
<br>
anyone!
<br>
<p>Regards, Gunnar Johansson
<br>
<p>If this would have worked, I could have added this to my .bashrc
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, any help is deeply appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/28/06, Miguel Figueiredo Mascarenhas Sousa Filipe &lt;
</span><br>
<span class="quotelev1">&gt; miguel.filipe_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi there,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  On 8/27/06, Durga Choudhury &lt; dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Hi all
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am getting an error (details follow) in the simplest of the possible
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test scenarios:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Two identical regular Dell PCs connected back-to-back via an ethernet
</span><br>
<span class="quotelev3">&gt; &gt; &gt; switch on the 10/100 ethernet. Both run Fedora Core 4. Identical version (
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.1) of Open MPI is compiled and installed on both of them *without* a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --prefix option ( i.e. installed on the default location of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The hostfile on both the machine is the same:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cat ~/hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 192.168.22.29
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 192.168.22.103
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can run openMPI on either of these two machines by forking two
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processes:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np2 osu_acc_latency  &lt;------ This runs fine on either of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two machines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, when I try to luch the same program across the two machines,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get an error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --hostfile ~/hostfile -np2 /home/durga/openmpi-1.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /osu_benchmarks/osu_acc_latency
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; durga_at_192.168.22.29's &lt;durga_at_192.168.22.29%27s&gt; password: foobar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/durga/openmpi-1.1/osu_benchmarks/osu_acc_latency: error while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; loading shared libraries: libmpi.so.0: cannot open shared object file:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No such file or directory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, the file *does exist* in /usr/local/lib:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ls -l /usr/local/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi.so.0 -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have also tried adding /usr/local/lib to my LD_LIBRARY_PATH on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *both* machines, to no avail.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; first of: I'm not from the  openMPI team.
</span><br>
<span class="quotelev2">&gt; &gt; Where did you add your LD_LIBRARY_PATH ?
</span><br>
<span class="quotelev2">&gt; &gt; make shure it is in one of the profile files for your shell.. such has:
</span><br>
<span class="quotelev2">&gt; &gt; .bash_profile and _not_ .bashrc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that's a tipical error in these kind of configurations..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Miguel Sousa Filipe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1785.php">Marcelo Stival: "[OMPI users] Short/long when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>In reply to:</strong> <a href="1783.php">Durga Choudhury: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
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
