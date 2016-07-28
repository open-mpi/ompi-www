<?
$subject_val = "[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 20:35:26 2011" -->
<!-- isoreceived="20110901003526" -->
<!-- sent="Wed, 31 Aug 2011 17:35:22 -0700 (PDT)" -->
<!-- isosent="20110901003522" -->
<!-- name="Mateus Augusto" -->
<!-- email="teleomintos_at_[hidden]" -->
<!-- subject="[OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?" -->
<!-- id="1314837322.2953.YahooMailNeo_at_web160708.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?<br>
<strong>From:</strong> Mateus Augusto (<em>teleomintos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 20:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="17135.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,


Traduzir do: portugu&#234;s
Digite um texto ou 
endere&#231;o de um site ou traduza um 
documento.
Cancelar
Tradu&#231;&#227;o do portugu&#234;s 
para ingl&#234;s
I have three processes that communicate with each other. The first process creates the other two processes (using MPI_Comm_spaw (...)).
When one of the processes performs MPI_Finalize (), it continues in execution, stoppedin MPI_Finalize function () (in busy waiting, ie, using CPU) and just executes the next instruction only 
when the other two processes run MPI_Finalize (). It seems that MPI_Finalize () behaves like MPI_Barrier (). This behavior only occurs when processes communicate with each other (when, for example, use MPI_Send,&#160; MPI_Isend, MPI_Bsend. or MPI_Ssend).
I would like to know if we can avoid this behavior of MPI_Finalize when processes communicate with each other.

Here there are the codes:

Process Master:

#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
#include &lt;mpi.h&gt;

int main(int argc, char** argv) {
&#160;&#160;&#160; int i;
&#160;&#160;&#160; char other[200];
&#160;&#160;&#160; getcwd(other, 199);
&#160;&#160;&#160; strcat(other, &quot;/otherProcess&quot;);
&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);
&#160;&#160;&#160; MPI_Comm com;
&#160;&#160;&#160; MPI_Status s;&#160;&#160;&#160; 
&#160;&#160;&#160; MPI_Comm_spawn(other, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
 MPI_COMM_WORLD, &amp;com, MPI_ERRCODES_IGNORE);
&#160;&#160;&#160; MPI_Recv(&amp;i, 1, MPI_INT, 0, 0, com, &amp;s);
&#160;&#160;&#160; sleep(15); // Make the otherProcess wait the Master process in MPI_Finalize().
&#160;&#160;&#160; MPI_Finalize();
&#160;&#160;&#160; return 0; 
}

Other Process (process Master calls otherProcess):

#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;mpi.h&gt;

int main(int argc, char * argv[]) {
&#160;&#160;&#160; int dest;
&#160;&#160;&#160; MPI_Comm parent;
&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);
&#160;&#160;&#160; MPI_Comm_get_parent(&amp;parent);
&#160;&#160;&#160; MPI_Send(&amp;dest, 1, MPI_INT, 0, 0, parent); // If this line is removed, the process doesn't stop in MPI_Finalize.
&#160;&#160;&#160; printf(&quot;Before MPI_Finalize\n&quot;);
&#160;&#160;&#160; MPI_Finalize();&#160; // The process stay here waiting all process execute
 MPI_Finalize.
&#160;&#160;&#160; printf(&quot;After MPI_Finalize\n&quot;);
&#160;&#160;&#160; return 0;
}

I've tried several things but nothing worked. I don't want that otherProcess stay waiting in MPI_Finalize().
Could someone help-me?

Thanks.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="17135.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="17137.php">Jeff Squyres: "Re: [OMPI users] Does MPI_Finalize() behaves like MPI_Barrier() ?"</a>
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
