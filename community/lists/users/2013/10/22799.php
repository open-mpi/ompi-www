<?
$subject_val = "[OMPI users] Send a struct with Vector or dynamics arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 11:37:06 2013" -->
<!-- isoreceived="20131017153706" -->
<!-- sent="Thu, 17 Oct 2013 12:37:05 -0300" -->
<!-- isosent="20131017153705" -->
<!-- name="Jeferson Fs" -->
<!-- email="duk_mad_at_[hidden]" -->
<!-- subject="[OMPI users] Send a struct with Vector or dynamics arrays" -->
<!-- id="BLU172-W249E4774C873708D567FBF82050_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Send a struct with Vector or dynamics arrays<br>
<strong>From:</strong> Jeferson Fs (<em>duk_mad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 11:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
<li><strong>Previous message:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,I am using OpenMPI v1.6.1 on Windows 7, and some time i am looking for any solution to send a struct with vector or using dynamics arrays.I know send structs with differents datatypes, like int, double, struct. But i have some problem sending vector or dynamics arrays.
<br>
Using MPI_Type_vector, MPI_Type_continuous or MPI_Type_extend i dont resolve....
<br>
Code: 
<br>
#include &quot;mpi.h&quot;#include &lt;iostream&gt;#include &lt;time.h&gt;  #include &lt;vector&gt;
<br>
using namespace std;
<br>
struct Teste6{	vector&lt;int&gt; t6;};
<br>
int main(int argc, char** argv){		MPI_Datatype struTeste6, oldTTeste6[1], newTTeste6;	int	blcklensTeste6[1];	MPI_Aint	offsTeste6[1], extTeste6;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teste6 tst6;		int max;	int myRank;	MPI_Status status;		MPI_Init(&amp;argc, &amp;argv);	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);	MPI_Comm_size(MPI_COMM_WORLD, &amp;max);		// Teste6	//MPI_Type_vector(2,1,1,MPI_INT, &amp;newTTeste6);	MPI_Type_contiguous(2, MPI_INT, &amp;newTTeste6);	offsTeste6[0] = 0;	oldTTeste6[0] = newTTeste6;	blcklensTeste6[0] = 1;		MPI_Type_struct(1, blcklensTeste6, offsTeste6, oldTTeste6, &amp;struTeste6);	MPI_Type_commit(&amp;struTeste6);	//	if(myRank == 0)	{		                //Add element 5 and element 10 to vector on struct		tst6.t6.push_back(5);		tst6.t6.push_back(10);                //Print elements to look before send		printf(&quot;\n myRank: %d - tst6.t6[0]: %d - tst6.t6[1]: %d&quot;, myRank, tst6.t6[0], tst6.t6[1]);		//Send to Process 1		MPI_Send(&amp;tst6, 1, struTeste6, 1, 1, MPI_COMM_WORLD);	}	else	{                // Receive from Process 0		MPI_Recv(&amp;tst6, 1, struTeste6, 0, 1, MPI_COMM_WORLD, &amp;status);		//This code dont print received struct, some problem here, process die.		printf(&quot;\n Slave 1 - myRank: %d - tst6.t6[0]: %d - tst6.t6[1]: %d&quot;, myRank, tst6.t6[0], tst6.t6[1]);	}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();	return 0;}
<br>
--Thanks
<br>
Atenciosamente,J&#233;ferson Fernandes da Silva 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22799/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
<li><strong>Previous message:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
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
