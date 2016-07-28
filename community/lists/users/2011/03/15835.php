<?
$subject_val = "Re: [OMPI users] Open MPI access the same file in parallel ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 01:56:44 2011" -->
<!-- isoreceived="20110310065644" -->
<!-- sent="Thu, 10 Mar 2011 06:56:37 +0000" -->
<!-- isosent="20110310065637" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI access the same file in parallel ?" -->
<!-- id="BAY161-w299AF169D488D3FF0BDA7BF4C80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SNT134-W56B619371260C56C9212DBCBC80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI access the same file in parallel ?<br>
<strong>From:</strong> Belaid MOA (<em>belaid_moa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 01:56:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15834.php">Tim Prince: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15833.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
&nbsp;&nbsp;cplex.importModel(model, problemFile) basically reads the problem from &quot;problemFile&quot; and add its content to &quot;model&quot;. So, I do not see
<br>
any problem calling that in your code for each process. The best way is just to try it out and let us know how it goes.
<br>
<p>With best regards,
<br>
-Belaid.
<br>
<p>&nbsp;&nbsp;
<br>
<p><p>From: dtustudy68_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Wed, 9 Mar 2011 23:42:00 -0700
<br>
Subject: Re: [OMPI users] Open MPI access the same file in parallel ?
<br>
<p><p><p><p><p><p><p><p>Hi, thanks for your code. 
<br>
I have test it with a simple example file. It works well without any conflict of parallel accessing the same file.
<br>
Now, I am using CPLEX (an optimization model solver) to load a model data file, which can be 200 MBytes. 
<br>
CPLEX.importModel(modelName, dataFileName) ;
<br>
I do not know how CPLEX code handle the reading the model data file.
<br>
Any suggestions or ideas are welcome.
<br>
<p>thanks
<br>
Jack 
<br>
<p>From: belaid_moa_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Thu, 10 Mar 2011 05:51:31 +0000
<br>
Subject: Re: [OMPI users] Open MPI access the same file in parallel ?
<br>
<p><p><p><p><p><p><p><p><p><p><p>Hi,
<br>
&nbsp;&nbsp;You can do that with C++ also. Just for fun of it, I produced a little program for that; each process reads the whole
<br>
file and print the content to stdout. I hope this helps:
<br>
<pre>
----
#include &lt;mpi.h&gt;
#include &lt;iostream&gt;
#include &lt;fstream&gt;
#include &lt;string&gt;
using namespace std;
int main (int argc, char* argv[]) {
  int rank, size;
  string line;
  MPI_Init (&amp;argc, &amp;argv);      
  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        
  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);       
  ifstream txtFile(&quot;example.txt&quot;);
  if (txtFile.is_open()) {
    while ( txtFile.good() ) {
      getline (txtFile,line);
      cout &lt;&lt; line &lt;&lt; endl;
    }
    txtFile.close();
  }else {
    cout &lt;&lt; &quot;Unable to open file&quot;;
  }
  MPI_Finalize(); /*end MPI*/
  return 0;
}
----
With best regards,
-Belaid.
From: dtustudy68_at_[hidden]
To: users_at_[hidden]
Date: Wed, 9 Mar 2011 22:08:44 -0700
Subject: Re: [OMPI users] Open MPI access the same file in parallel ?
Thanks, 
I only need to read the file. And, all processes only to read the file only once. 
But, the file is about 200MB. 
But, my code is C++. 
Does Open MPI support this ?
thanks
From: solarbikedz_at_[hidden]
Date: Wed, 9 Mar 2011 20:57:03 -0800
To: users_at_[hidden]
Subject: Re: [OMPI users] Open MPI access the same file in parallel ?
Under my programming environment, FORTRAN, it is possible to parallel read (using native read function instead of MPI's parallel read function).  Although you'll run into problem when you try to parallel write to the same file.
On Wed, Mar 9, 2011 at 8:45 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
Hi, 
I have a file, which is located in a system folder, which can be accessed by all parallel processes. 
Does Open MPI allow multi processes to access the same file at the same time ? 
For example, all processes open the file and load data from it at the same time. 
Any help is really appreciated. 
thanks
Jack
Mar 9 2011
  		 	   		  
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15834.php">Tim Prince: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15833.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
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
