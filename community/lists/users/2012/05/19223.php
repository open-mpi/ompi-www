<?
$subject_val = "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 09:59:36 2012" -->
<!-- isoreceived="20120508135936" -->
<!-- sent="Tue, 8 May 2012 21:59:32 +0800" -->
<!-- isosent="20120508135932" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust" -->
<!-- id="CAFAE9jhcZ4SrMxRHMe6WVzoeJ7zPDTtE56iuOtB+k2FjmbhtQQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E842E53AE_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 09:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19224.php">Jeff Squyres (jsquyres): "[OMPI users] The Architecture of Open Source Applications (vol 2)"</a>
<li><strong>Previous message:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep you are correct. I did the same and it worked. When I have more than 3
<br>
MPI tasks there is lot of overhead on GPU.
<br>
<p>But for CPU there is not overhead. All three machines have 4 quad core
<br>
processors with 3.8 GB RAM.
<br>
<p>Just wondering why there is no degradation of performance on CPU ?
<br>
<p>On Tue, May 8, 2012 at 8:21 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; You should be running with one GPU per MPI process.  If I understand
</span><br>
<span class="quotelev1">&gt; correctly, you have a 3 node cluster and each node has a GPU so you should
</span><br>
<span class="quotelev1">&gt; run with np=3.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you can try that and see if your numbers come out better.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Rohan Deshpande
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, May 07, 2012 9:38 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] GPU and CPU timing - OpenMPI and Thrust****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am running MPI and Thrust code on a cluster and measuring time for
</span><br>
<span class="quotelev1">&gt; calculations.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI code -   ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/resource.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define  MASTER 0****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define ARRAYSIZE 20000000****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; *masterarray,*onearray,*twoarray,*threearray,*fourarray,*fivearray,*sixarray,*sevenarray,*eightarray,*ninearray;
</span><br>
<span class="quotelev1">&gt;     ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int main(int argc, char* argv[])****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int   numtasks, taskid,chunksize, namelen; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int mysum,one,two,three,four,five,six,seven,eight,nine;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   char myname[MPI_MAX_PROCESSOR_NAME];****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int a,b,c,d,e,f,g,h,i,j;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /***** Initializations *****/****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid); ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(myname, &amp;namelen);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; masterarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; onearray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; twoarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; threearray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fourarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fivearray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sixarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sevenarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eightarray= malloc(ARRAYSIZE * sizeof(int));****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ninearray= malloc(ARRAYSIZE * sizeof(int)); ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /***** Master task only ******/****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (taskid == MASTER){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            for(a=0; a &lt; ARRAYSIZE; a++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  masterarray[a] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mysum = run_kernel0(masterarray,ARRAYSIZE,taskid, myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  }  /* end of master section */****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (taskid &gt; MASTER) {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 1){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 for(b=0;b&lt;ARRAYSIZE;b++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 onearray[b] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  one = run_kernel0(onearray,ARRAYSIZE,taskid, myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 2){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 for(c=0;c&lt;ARRAYSIZE;c++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  twoarray[c] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  two = run_kernel0(twoarray,ARRAYSIZE,taskid, myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 3){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  for(d=0;d&lt;ARRAYSIZE;d++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  threearray[d] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   three = run_kernel0(threearray,ARRAYSIZE,taskid, myname);
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(taskid == 4){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    for(e=0;e &lt; ARRAYSIZE; e++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       fourarray[e] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  four = run_kernel0(fourarray,ARRAYSIZE,taskid, myname);**
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 5){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 for(f=0;f&lt;ARRAYSIZE;f++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   fivearray[f] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 five = run_kernel0(fivearray,ARRAYSIZE,taskid, myname);***
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 6){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 for(g=0;g&lt;ARRAYSIZE;g++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  sixarray[g] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  six = run_kernel0(sixarray,ARRAYSIZE,taskid, myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              } ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 7){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     for(h=0;h&lt;ARRAYSIZE;h++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     sevenarray[h] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    seven = run_kernel0(sevenarray,ARRAYSIZE,taskid,
</span><br>
<span class="quotelev1">&gt; myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              } ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 8){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   for(i=0;i&lt;ARRAYSIZE;i++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   eightarray[i] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    eight = run_kernel0(eightarray,ARRAYSIZE,taskid,
</span><br>
<span class="quotelev1">&gt; myname);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              } ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if(taskid == 9){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    for(j=0;j&lt;ARRAYSIZE;j++){****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  ninearray[j] = 1;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    nine = run_kernel0(ninearray,ARRAYSIZE,taskid, myname);
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              } ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }   ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the tasks just initialize their own array and then calculate the sum
</span><br>
<span class="quotelev1">&gt; using cuda thrust.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My CUDA Thrust code - ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cutil_inline.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cutil.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/version.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/generate.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/host_vector.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/device_vector.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/functional.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;thrust/transform_reduce.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/resource.h&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   extern &quot;C&quot;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int run_kernel0( int array[], int nelements, int taskid, char hostname[])
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        float elapsedTime;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int result = 0;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int threshold = 25000000;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         cudaEvent_t start, stop;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventCreate(&amp;start);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventCreate(&amp;stop);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventRecord(start, 0);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thrust::device_vector&lt;int&gt; gpuarray;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *begin = array;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int *end = array + nelements;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while(begin != end)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int chunk_size = thrust::min(threshold,end - begin);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    gpuarray.assign(begin, begin + chunk_size); ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  result += thrust::reduce(gpuarray.begin(), gpuarray.end());****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    begin += chunk_size;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         cudaEventRecord(stop, 0);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         cudaEventSynchronize(stop);     ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventElapsedTime(&amp;elapsedTime, start, stop);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventDestroy(start);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaEventDestroy(stop);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot; Task %d on has sum (on GPU): %ld Time for the kernel: %f
</span><br>
<span class="quotelev1">&gt; ms \n&quot;, taskid, result, elapsedTime); ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return result;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also calculate the sum using CPU and the code is as below - ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   struct timespec time1, time2, temp_time;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   clock_gettime(CLOCK_PROCESS_CPUTIME_ID, &amp;time1);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int i;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int cpu_sum = 0;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   long diff = 0;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (i = 0; i &lt; nelements; i++) {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cpu_sum += array[i];****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   }    ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   clock_gettime(CLOCK_PROCESS_CPUTIME_ID, &amp;time2);****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   temp_time.tv_sec = time2.tv_sec - time1.tv_sec;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   temp_time.tv_nsec = time2.tv_nsec - time1.tv_nsec;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   diff = temp_time.tv_sec * 1000000000 + temp_time.tv_nsec; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Task %d calculated sum: %d using CPU in %lf ms \n&quot;, taskid,
</span><br>
<span class="quotelev1">&gt; cpu_sum, (double) diff/1000000); ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return cpu_sum;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now when I run the job on cluster with 10 MPI tasks and compare the
</span><br>
<span class="quotelev1">&gt; timings of CPU and GPU, I get weird results where GPU time is much much
</span><br>
<span class="quotelev1">&gt; higher than CPU time. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the case should be opposite isnt it?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The CPU time is almost same for all the task but GPU time increases. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just wondering what might be the cause of this or are these results
</span><br>
<span class="quotelev1">&gt; correct? Anything wrong with MPI code?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster has 3 machines. 4 MPI tasks run on 2 machine and 2 Tasks run on
</span><br>
<span class="quotelev1">&gt; 1 machine. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each machine has 1 GPU - GForce 9500 GT with 512 MB memory. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone please help me with this.?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt;  This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message.
</span><br>
<span class="quotelev1">&gt;  ------------------------------
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
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19224.php">Jeff Squyres (jsquyres): "[OMPI users] The Architecture of Open Source Applications (vol 2)"</a>
<li><strong>Previous message:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
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
