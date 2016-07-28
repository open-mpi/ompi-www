<?
$subject_val = "[OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 11:34:16 2008" -->
<!-- isoreceived="20080313153416" -->
<!-- sent="Thu, 13 Mar 2008 23:33:55 +0800" -->
<!-- isosent="20080313153355" -->
<!-- name="Rolly Ng" -->
<!-- email="50008104_at_[hidden]" -->
<!-- subject="[OMPI users] Please help &amp;quot;orte_init failed error&amp;quot; running simple MPI code" -->
<!-- id="000601c8851f$a5f24ea0$f1d6ebe0$_at_cityu.edu.hk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code<br>
<strong>From:</strong> Rolly Ng (<em>50008104_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 11:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5190.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Reply:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;
<br>
<p>I am new to open-MPI programming and I have a strange error while running my
<br>
simple code:
<br>
<p>&nbsp;
<br>
<p>My platform is a IBM T42 notebook with just a single-core processor, and I
<br>
just installed OpenSuSE 10.3 with KDevelop as my IDE. I have downloaded the
<br>
openmpi-1.2.5.tar.gz and install using the commands,
<br>
<p>&nbsp;
<br>
<p>shell$ gunzip -c openmpi-1.2.5.tar.gz | tar xf - shell$ cd openmpi-1.2.5
<br>
shell$ ./configure --prefix=/usr/local &lt;...lots of output...&gt; shell$ make
<br>
all install
<br>
<p>&nbsp;
<br>
<p>Then I add -lmpi, -lmpi_cxx, -lopen-pal, -lopen-rte, -lmca_common_sm options
<br>
to the link libraries outside project (LDADD) in the Automake Manager inside
<br>
Kdevelop. I have also added the PATH /usr/local/bin and LD_LIBRARY_PATH
<br>
/usr/local/lib in the Enviroment variables in the Run options of Project
<br>
Options. I can compile my code with no error.
<br>
<p>&nbsp;
<br>
<p>Here are my codes,
<br>
<p>#ifdef HAVE_CONFIG_H
<br>
<p>#include &lt;config.h&gt;
<br>
<p>#endif
<br>
<p>&nbsp;
<br>
<p>#include &lt;iostream&gt;
<br>
<p>#include &lt;math.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>//#include &lt;iostream&gt;
<br>
<p>//#include &lt;cstdlib&gt;
<br>
<p>&nbsp;
<br>
<p>using namespace std;
<br>
<p>&nbsp;
<br>
<p>int main(int argc, char ** argv)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;int mynode, totalnodes;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;totalnodes);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mynode);
<br>
<p>&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;cout &lt;&lt; &quot;Hello world from processor &quot; &lt;&lt; mynode &lt;&lt; &quot; of &quot; &lt;&lt; totalnodes &lt;&lt;
<br>
endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>I am expecting the output as: Hello world from processor 0 of 1. But it does
<br>
not work and MPI failed to initialize. The output is strange:
<br>
<p>&nbsp;
<br>
<p>[rollyopensuse:24924] [0,0,0] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init_stage1.c at line 312
<br>
<p>--------------------------------------------------------------------------
<br>
<p>It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can fail
<br>
during orte_init; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
<p>&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>&nbsp;
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can fail
<br>
during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
<p>developer):
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init_stage1 failed
<br>
<p>&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
<p>--------------------------------------------------------------------------
<br>
<p>*** An error occurred in MPI_Init
<br>
<p>*** before MPI was initialized
<br>
<p>*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[rollyopensuse:24924] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
<p>Press Enter to continue!
<br>
<p>&nbsp;
<br>
<p>Did I must some important parameters while configuring the openMPI setup?
<br>
How can I correct the error? Thank you very much!
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Rolly
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5190.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Reply:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
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
