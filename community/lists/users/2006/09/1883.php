<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 19 06:39:57 2006" -->
<!-- isoreceived="20060919103957" -->
<!-- sent="Tue, 19 Sep 2006 11:39:51 +0100" -->
<!-- isosent="20060919103951" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="[OMPI users] Boost bindings to MPI" -->
<!-- id="d9b9d95f0609190339n6f25fu96df2f1ab669cad2_at_mail.gmail.com" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-19 06:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
<li><strong>Previous message:</strong> <a href="1882.php">Jeffrey M Ceason: "[OMPI users] Mpirun no output without --debug-daemons flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>Reply:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More than a week old news but didn't see anyone commenting on that:
<br>
<p><a href="http://www.generic-programming.org/~dgregor/boost.mpi/libs/parallel/doc/html/">http://www.generic-programming.org/~dgregor/boost.mpi/libs/parallel/doc/html/</a>
<br>
<p>The page says it was tested with LAM, Open and MPICH but the
<br>
functionality is still limited.
<br>
<p>I liked *very* much the way they transformed MPI into plain C++ code.
<br>
Look at this code:
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;mpi::environment env(argc, argv);
<br>
&nbsp;&nbsp;mpi::communicator world;
<br>
<p>&nbsp;&nbsp;if (world.rank() == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;world.send(1, 0, std::string(&quot;Hello&quot;));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::string msg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;world.recv(1, 1, msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; msg &lt;&lt; &quot;!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::string msg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;world.recv(0, 0, msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; msg &lt;&lt; &quot;, &quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;world.send(0, 1, std::string(&quot;world&quot;));
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
<li><strong>Previous message:</strong> <a href="1882.php">Jeffrey M Ceason: "[OMPI users] Mpirun no output without --debug-daemons flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>Reply:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
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
