<?
$subject_val = "Re: [OMPI users] Receive operations hanging forever";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 19:35:28 2008" -->
<!-- isoreceived="20080313233528" -->
<!-- sent="Thu, 13 Mar 2008 20:27:26 -0300" -->
<!-- isosent="20080313232726" -->
<!-- name="Giovani" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receive operations hanging forever" -->
<!-- id="47D9B85E.9000204_at_yahoo.com.br" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="09AEE932-0BB4-44B4-A920-00AD3D68A0E2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receive operations hanging forever<br>
<strong>From:</strong> Giovani (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 19:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>In reply to:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch! I was using the Bcast and thinking of it as a Send... :)
<br>
<p>Thank you very much!
<br>
<p><p>George Bosilca escreveu:
<br>
<span class="quotelev1">&gt; Any collective communication has to be performed by all processes in 
</span><br>
<span class="quotelev1">&gt; the communicator. You example should be Bcast on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2008, at 5:50 PM, Giovani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello OpenMPI people!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that my openmpi install is somewhat strange. I'm simply
</span><br>
<span class="quotelev2">&gt;&gt; incapable of performing the simplest Recv operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've installed openmpi using the default gentoo linux package. It
</span><br>
<span class="quotelev2">&gt;&gt; compiled without any problems. The version is sys-cluster/openmpi-1.2.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now let's use the following program as a test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpicxx.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI::Init();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    //If we are process 0:
</span><br>
<span class="quotelev2">&gt;&gt;    if ( MPI::COMM_WORLD.Get_rank() == 0 )
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;        double d = 5;
</span><br>
<span class="quotelev2">&gt;&gt;        cout &lt;&lt; &quot;Starting to send data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI::COMM_WORLD.Bcast( &amp;d, 1, MPI::DOUBLE, 0);
</span><br>
<span class="quotelev2">&gt;&gt;        cout &lt;&lt; &quot;Finished to send data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    //Else:
</span><br>
<span class="quotelev2">&gt;&gt;    else
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI::Status mpi_status;
</span><br>
<span class="quotelev2">&gt;&gt;        double d = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        cout &lt;&lt; &quot;Starting to receive data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::DOUBLE, MPI::ANY_SOURCE,
</span><br>
<span class="quotelev2">&gt;&gt; MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev2">&gt;&gt;        cout &lt;&lt; &quot;Finished to receive data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;    };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev2">&gt;&gt;    MPI::Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm calling it with this command:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpirun --hostfile mpi-config.txt -np 3
</span><br>
<span class="quotelev2">&gt;&gt; /home/gfaccin/desenvolvimento/Eclipse/mpiplay/Debug/mpiplay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where the hostfile mpi-config.txt contains the following line:
</span><br>
<span class="quotelev2">&gt;&gt; localhost slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The slots thing is just to tell openmpi that I'm running it on a single
</span><br>
<span class="quotelev2">&gt;&gt; processor PC with oversubscribed nodes. Running the program without
</span><br>
<span class="quotelev2">&gt;&gt; using host files leads to the same results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once the program starts, I get this output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Starting to send data from node 0...
</span><br>
<span class="quotelev2">&gt;&gt; Finished to send data from node 0...
</span><br>
<span class="quotelev2">&gt;&gt; Starting to receive data from node 0...
</span><br>
<span class="quotelev2">&gt;&gt; Starting to receive data from node 0...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And that's it. Processor usage goes to 100% and stays like that forever.
</span><br>
<span class="quotelev2">&gt;&gt; The output indicates that the Recv functions have hung.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to reinstall the package in case something is broken, but
</span><br>
<span class="quotelev2">&gt;&gt; nothing changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you have any clues on how can I fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Giovani
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>In reply to:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
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
