<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 13:30:48 2008" -->
<!-- isoreceived="20081007173048" -->
<!-- sent="Tue, 7 Oct 2008 13:30:42 -0400" -->
<!-- isosent="20081007173042" -->
<!-- name="Matt Burgess" -->
<!-- email="burgess.matt_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="a2f40f560810071030t70d3fc84m49c1abda2353e687_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48EB9C7A.30509_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Matt Burgess (<em>burgess.matt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 13:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4747.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="4747.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>That's great, thanks for the help. When exactly do you expect that 1.2.8
<br>
will be released?
<br>
<p>Thanks,
<br>
Matt
<br>
<p>On Tue, Oct 7, 2008 at 1:29 PM, Pavel Shamis (Pasha) &lt;
<br>
pasha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Matt,
</span><br>
<span class="quotelev1">&gt; For all 1.2.X versions you should use btl_openib_ib_pkey_val
</span><br>
<span class="quotelev1">&gt; In ongoing 1.3 version the parameter was renamed to btl_openib_of_pkey_val.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW we plan to release 1.2.8 version very soon and it will include the
</span><br>
<span class="quotelev1">&gt; partition bug fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt Burgess wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With your patch and parameter suggestion, it works! So to be clear
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_pkey_val is for 1.2.6 and btl_openib_of_pkey_val is for 1.2.7?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 7, 2008 at 12:24 PM, Pavel Shamis (Pasha) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; pasha_at_[hidden] &lt;mailto:pasha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Matt,
</span><br>
<span class="quotelev2">&gt;&gt;    Can you please run &quot; cat
</span><br>
<span class="quotelev2">&gt;&gt;    /sys/class/infiniband/mlx4_0/ports/1/pkeys/* &quot; on your d2-ib,d3-ib.
</span><br>
<span class="quotelev2">&gt;&gt;    I would like to check the partition configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Ohh, BTW I see that the command line in previous email was wrong,
</span><br>
<span class="quotelev2">&gt;&gt;    Please use follow command line (the parameter name should be
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;btl_openib_ib_pkey_val&quot; for ompi-1.2.6 and my patch accepts
</span><br>
<span class="quotelev2">&gt;&gt;    HEX/DEC values):
</span><br>
<span class="quotelev2">&gt;&gt;    /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -H d2-ib,d3-ib -mca btl
</span><br>
<span class="quotelev2">&gt;&gt;    openib,self -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev2">&gt;&gt;    /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Ompi 1.2.6 version should work ok with this patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Matt Burgess wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Pasha,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks for the patch. Unfortunately, it doesn't seem like that
</span><br>
<span class="quotelev2">&gt;&gt;        fixed the problem. I realized earlier I didn't mention what
</span><br>
<span class="quotelev2">&gt;&gt;        version of OpenMPI I was trying - it's 1.2.6. &lt;<a href="http://1.2.6">http://1.2.6</a>.&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;<a href="http://1.2.6">http://1.2.6</a>.&gt; Should I be trying 1.2.7 with this patch?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;        Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        2008/10/7 Pavel Shamis (Pasha) &lt;pasha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:pasha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:pasha_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Matt,
</span><br>
<span class="quotelev2">&gt;&gt;           Can you please try attached patch ? I guess it will resolve
</span><br>
<span class="quotelev2">&gt;&gt;        this
</span><br>
<span class="quotelev2">&gt;&gt;           issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;           Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Matt Burgess wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Lenny,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Thanks for the info. It doesn't seem to be be working
</span><br>
<span class="quotelev2">&gt;&gt;        still.
</span><br>
<span class="quotelev2">&gt;&gt;               My command line is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -H d2-ib,d3-ib
</span><br>
<span class="quotelev2">&gt;&gt;        -mca btl
</span><br>
<span class="quotelev2">&gt;&gt;               openib,self -mca btl_openib_of_pkey_val 33033
</span><br>
<span class="quotelev2">&gt;&gt;               /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               I don't have a
</span><br>
<span class="quotelev2">&gt;&gt;        &quot;/sys/class/infiniband/mthca0/ports/1/pkeys/&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               but I do have
</span><br>
<span class="quotelev2">&gt;&gt;        &quot;/sys/class/infiniband/mlx4_0/ports/1/pkeys/&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;               It's contents are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               0    106  114  122  16   24   32   40   49   57   65
</span><br>
<span class="quotelev2">&gt;&gt;  73   81
</span><br>
<span class="quotelev2">&gt;&gt;                 9    98
</span><br>
<span class="quotelev2">&gt;&gt;               1    107  115  123  17   25   33   41   5    58   66
</span><br>
<span class="quotelev2">&gt;&gt;  74   82
</span><br>
<span class="quotelev2">&gt;&gt;                 90   99
</span><br>
<span class="quotelev2">&gt;&gt;               10   108  116  124  18   26   34   42   50   59   67
</span><br>
<span class="quotelev2">&gt;&gt;  75   83
</span><br>
<span class="quotelev2">&gt;&gt;                 91  100  109  117  125  19   27   35   43   51   6
</span><br>
<span class="quotelev2">&gt;&gt;   68          76   84   92  101  11   118  126  2    28   36          44
</span><br>
<span class="quotelev2">&gt;&gt; 52   60
</span><br>
<span class="quotelev2">&gt;&gt;                 69   77   85   93  102  110  119  127  20   29   37
</span><br>
<span class="quotelev2">&gt;&gt;    45          53   61   7    78   86   94  103  111  12   13          21
</span><br>
<span class="quotelev2">&gt;&gt; 3    38
</span><br>
<span class="quotelev2">&gt;&gt;                 46   54   62   70   79   87   95  104  112  120  14
</span><br>
<span class="quotelev2">&gt;&gt;    22          30   39   47   55   63   71   8    88   96  105
</span><br>
<span class="quotelev2">&gt;&gt;         113  121  15
</span><br>
<span class="quotelev2">&gt;&gt;                 23   31   4    48   56   64   72   80   89   97
</span><br>
<span class="quotelev2">&gt;&gt;               We aren't using the opensm, but voltaire's SM on a 2012
</span><br>
<span class="quotelev2">&gt;&gt;        switch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt;               Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               On Tue, Oct 7, 2008 at 9:37 AM, Lenny Verkhovsky
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Hi Matt,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  It seems that the right way to do it is the fallowing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  -mca btl openib,self -mca btl_openib_ib_pkey_val 33033
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  when the value is a decimal number of the pkey, in
</span><br>
<span class="quotelev2">&gt;&gt;        your case
</span><br>
<span class="quotelev2">&gt;&gt;                  0x8109 = 33033, and no need for
</span><br>
<span class="quotelev2">&gt;&gt;        btl_openib_ib_pkey_ix value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  ex.
</span><br>
<span class="quotelev2">&gt;&gt;                  mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev2">&gt;&gt;                  btl_openib_ib_pkey_val 32769 ./mpi_p1_4_1_2 -t lt
</span><br>
<span class="quotelev2">&gt;&gt;                  LT (2) (size min max avg) 1 3.511429 3.511429 3.511429
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  if it's not working check cat
</span><br>
<span class="quotelev2">&gt;&gt;                  /sys/class/infiniband/mthca0/ports/1/pkeys/* for
</span><br>
<span class="quotelev2">&gt;&gt;        pkeys ans SM,
</span><br>
<span class="quotelev2">&gt;&gt;                  maybe it's a setup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Pasha is currently checking this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  On 10/7/08, *Jeff Squyres* &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      FWIW, if this configuration is for all of your
</span><br>
<span class="quotelev2">&gt;&gt;        users, you
</span><br>
<span class="quotelev2">&gt;&gt;                      might want to specify these MCA params in the
</span><br>
<span class="quotelev2">&gt;&gt;        default MCA
</span><br>
<span class="quotelev2">&gt;&gt;                      param file, or the environment, ...etc.  Just so
</span><br>
<span class="quotelev2">&gt;&gt;        that you
</span><br>
<span class="quotelev2">&gt;&gt;                      don't have to specify it on every mpirun command
</span><br>
<span class="quotelev2">&gt;&gt;        line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      See
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On Oct 7, 2008, at 5:43 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Sorry, misunderstood the question,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          thanks for Pasha the right command line will be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          -mca btl openib,self -mca
</span><br>
<span class="quotelev2">&gt;&gt;        btl_openib_of_pkey_val 0x8109
</span><br>
<span class="quotelev2">&gt;&gt;                          -mca btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          ex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          #mpirun -np 2 -H witch2,witch3 -mca btl
</span><br>
<span class="quotelev2">&gt;&gt;        openib,self
</span><br>
<span class="quotelev2">&gt;&gt;               -mca
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_openib_of_pkey_val 0x8001 -mca
</span><br>
<span class="quotelev2">&gt;&gt;               btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev2">&gt;&gt;                          ./mpi_p1_4_TRUNK -t lt
</span><br>
<span class="quotelev2">&gt;&gt;                          LT (2) (size min max avg) 1 3.443480
</span><br>
<span class="quotelev2">&gt;&gt;        3.443480 3.443480
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote: On Oct 5, 2008, at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          you should probably use -mca tcp,self  -mca
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_openib_if_include ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Really?  I thought we only took OpenFabrics
</span><br>
<span class="quotelev2">&gt;&gt;        device
</span><br>
<span class="quotelev2">&gt;&gt;               names
</span><br>
<span class="quotelev2">&gt;&gt;                          in the openib_if_include MCA param...?  It
</span><br>
<span class="quotelev2">&gt;&gt;        looks like
</span><br>
<span class="quotelev2">&gt;&gt;                          ib0.8109 is an IPoIB device name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          On 10/3/08, Matt Burgess
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;burgess.matt_at_[hidden] &lt;mailto:burgess.matt_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:burgess.matt_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:burgess.matt_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          &lt;mailto:burgess.matt_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:burgess.matt_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:burgess.matt_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:burgess.matt_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;                          Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          I'm trying to get openmpi working over openib
</span><br>
<span class="quotelev2">&gt;&gt;               partitions.
</span><br>
<span class="quotelev2">&gt;&gt;                          On this cluster, the partition number is
</span><br>
<span class="quotelev2">&gt;&gt;        0x109. The ib
</span><br>
<span class="quotelev2">&gt;&gt;                          interfaces are pingable over the appropriate
</span><br>
<span class="quotelev2">&gt;&gt;        ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt;                          interface:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt;                          ib0.8109  Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt;                          80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;                                  inet addr:10.21.48.2
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;<a href="http://10.21.48.2">http://10.21.48.2</a>&gt; &lt;<a href="http://10.21.48.2">http://10.21.48.2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;<a href="http://10.21.48.2">http://10.21.48.2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                           Bcast:10.21.255.255 &lt;<a href="http://10.21.255.255">http://10.21.255.255</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;<a href="http://10.21.255.255">http://10.21.255.255</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;<a href="http://10.21.255.255">http://10.21.255.255</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                           Mask:255.255.0.0 &lt;<a href="http://255.255.0.0">http://255.255.0.0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;<a href="http://255.255.0.0">http://255.255.0.0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;<a href="http://255.255.0.0">http://255.255.0.0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                  inet6 addr: fe80::202:c902:26:ca01/64
</span><br>
<span class="quotelev2">&gt;&gt;               Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;                                  UP BROADCAST RUNNING MULTICAST
</span><br>
<span class="quotelev2">&gt;&gt;         MTU:65520
</span><br>
<span class="quotelev2">&gt;&gt;                Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;                                  RX packets:16811 errors:0 dropped:0
</span><br>
<span class="quotelev2">&gt;&gt;               overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;                                  TX packets:15848 errors:0 dropped:1
</span><br>
<span class="quotelev2">&gt;&gt;        overruns:0
</span><br>
<span class="quotelev2">&gt;&gt;                          carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;                                  collisions:0 txqueuelen:256
</span><br>
<span class="quotelev2">&gt;&gt;                                  RX bytes:102229428 (97.4 Mb)  TX
</span><br>
<span class="quotelev2">&gt;&gt;               bytes:102324172
</span><br>
<span class="quotelev2">&gt;&gt;                          (97.5 Mb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          I have tried the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          /opt/openmpi-ib/1.2.6/bin/mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt;        -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;                          machinefile -mca btl openib,self -mca
</span><br>
<span class="quotelev2">&gt;&gt;               btl_openib_max_btls
</span><br>
<span class="quotelev2">&gt;&gt;                          1 -mca btl_openib_ib_pkey_val 0x8109 -mca
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_openib_ib_pkey_ix 1
</span><br>
<span class="quotelev2">&gt;&gt;               /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          but I just get a RETRY EXCEEDED ERROR. Is
</span><br>
<span class="quotelev2">&gt;&gt;        there a MCA
</span><br>
<span class="quotelev2">&gt;&gt;                          parameter I am missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          I was successful using tcp only:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          /opt/openmpi-ib/1.2.6/bin/mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt;        -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;                          machinefile -mca btl tcp,self -mca
</span><br>
<span class="quotelev2">&gt;&gt;               btl_openib_max_btls 1
</span><br>
<span class="quotelev2">&gt;&gt;                          -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev2">&gt;&gt;                          /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;                          Matt Burgess
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                          users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                          users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                          users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                          users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          --            Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                          Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                          users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                          users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --        Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                      Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;               devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;               devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           --    --
</span><br>
<span class="quotelev2">&gt;&gt;           Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt;           Mellanox Technologies LTD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;           --- ompi/mca/btl/openib/btl_openib_component.c  (revision
</span><br>
<span class="quotelev2">&gt;&gt;        19490)
</span><br>
<span class="quotelev2">&gt;&gt;           +++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -558,7 +558,7 @@ static int init_one_hca(opal_list_t *btl
</span><br>
<span class="quotelev2">&gt;&gt;                    goto dealloc_pd;
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           -    ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;           +    ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;               /* Note ports are 1 based hence j = 1 */
</span><br>
<span class="quotelev2">&gt;&gt;               for(i = 1; i &lt;= hca-&gt;ib_dev_attr.phys_port_cnt; i++){
</span><br>
<span class="quotelev2">&gt;&gt;                   struct ibv_port_attr ib_port_attr;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -580,7 +580,7 @@ static int init_one_hca(opal_list_t *btl
</span><br>
<span class="quotelev2">&gt;&gt;                           uint16_t pkey,j;
</span><br>
<span class="quotelev2">&gt;&gt;                           for (j=0; j &lt; hca-&gt;ib_dev_attr.max_pkeys;
</span><br>
<span class="quotelev2">&gt;&gt;        j++) {
</span><br>
<span class="quotelev2">&gt;&gt;                               ibv_query_pkey(hca-&gt;ib_dev_context, i,
</span><br>
<span class="quotelev2">&gt;&gt;        j, &amp;pkey);
</span><br>
<span class="quotelev2">&gt;&gt;           -                    pkey=ntohs(pkey);
</span><br>
<span class="quotelev2">&gt;&gt;           +                    pkey=ntohs(pkey) &amp; 0x7fff;
</span><br>
<span class="quotelev2">&gt;&gt;                               if(pkey ==
</span><br>
<span class="quotelev2">&gt;&gt;        mca_btl_openib_component.ib_pkey_val){
</span><br>
<span class="quotelev2">&gt;&gt;                                   ret = init_one_port(btl_list, hca,
</span><br>
<span class="quotelev2">&gt;&gt;        i, j,
</span><br>
<span class="quotelev2">&gt;&gt;           &amp;ib_port_attr);
</span><br>
<span class="quotelev2">&gt;&gt;                                   break;
</span><br>
<span class="quotelev2">&gt;&gt;           Index: ompi/mca/btl/openib/btl_openib_ini.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;           --- ompi/mca/btl/openib/btl_openib_ini.c        (revision
</span><br>
<span class="quotelev2">&gt;&gt;        19490)
</span><br>
<span class="quotelev2">&gt;&gt;           +++ ompi/mca/btl/openib/btl_openib_ini.c        (working copy)
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -90,8 +90,6 @@ static int parse_line(parsed_section_val
</span><br>
<span class="quotelev2">&gt;&gt;            static void reset_section(bool had_previous_value,
</span><br>
<span class="quotelev2">&gt;&gt;           parsed_section_values_t *s);
</span><br>
<span class="quotelev2">&gt;&gt;            static void reset_values(ompi_btl_openib_ini_values_t *v);
</span><br>
<span class="quotelev2">&gt;&gt;            static int save_section(parsed_section_values_t *s);
</span><br>
<span class="quotelev2">&gt;&gt;           -static int intify(char *string);
</span><br>
<span class="quotelev2">&gt;&gt;           -static int intify_list(char *str, uint32_t **values, int
</span><br>
<span class="quotelev2">&gt;&gt;        *len);
</span><br>
<span class="quotelev2">&gt;&gt;            static inline void show_help(const char *topic);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -364,14 +362,14 @@ static int parse_line(parsed_section_val
</span><br>
<span class="quotelev2">&gt;&gt;                  all whitespace at the beginning and ending of the
</span><br>
<span class="quotelev2">&gt;&gt;        value. */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               if (0 == strcasecmp(key_buffer, &quot;vendor_id&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;           -        if (OMPI_SUCCESS != (ret = intify_list(value,
</span><br>
<span class="quotelev2">&gt;&gt;           &amp;sv-&gt;vendor_ids,
</span><br>
<span class="quotelev2">&gt;&gt;           +        if (OMPI_SUCCESS != (ret =
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify_list(value, &amp;sv-&gt;vendor_ids,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;sv-&gt;vendor_ids_len))) {
</span><br>
<span class="quotelev2">&gt;&gt;                       return ret;
</span><br>
<span class="quotelev2">&gt;&gt;                   }
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               else if (0 == strcasecmp(key_buffer, &quot;vendor_part_id&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;           -        if (OMPI_SUCCESS != (ret = intify_list(value,
</span><br>
<span class="quotelev2">&gt;&gt;           &amp;sv-&gt;vendor_part_ids,
</span><br>
<span class="quotelev2">&gt;&gt;           +        if (OMPI_SUCCESS != (ret =
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify_list(value, &amp;sv-&gt;vendor_part_ids,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;sv-&gt;vendor_part_ids_len))) {
</span><br>
<span class="quotelev2">&gt;&gt;                       return ret;
</span><br>
<span class="quotelev2">&gt;&gt;                   }
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -379,13 +377,13 @@ static int parse_line(parsed_section_val
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               else if (0 == strcasecmp(key_buffer, &quot;mtu&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;                   /* Single value */
</span><br>
<span class="quotelev2">&gt;&gt;           -        sv-&gt;values.mtu = (uint32_t) intify(value);
</span><br>
<span class="quotelev2">&gt;&gt;           +        sv-&gt;values.mtu = (uint32_t)
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify(value);
</span><br>
<span class="quotelev2">&gt;&gt;                   sv-&gt;values.mtu_set = true;
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               else if (0 == strcasecmp(key_buffer, &quot;use_eager_rdma&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;                   /* Single value */
</span><br>
<span class="quotelev2">&gt;&gt;           -        sv-&gt;values.use_eager_rdma = (uint32_t) intify(value);
</span><br>
<span class="quotelev2">&gt;&gt;           +        sv-&gt;values.use_eager_rdma = (uint32_t)
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify(value);
</span><br>
<span class="quotelev2">&gt;&gt;                   sv-&gt;values.use_eager_rdma_set = true;
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -547,7 +545,7 @@ static int save_section(parsed_section_v
</span><br>
<span class="quotelev2">&gt;&gt;            /*
</span><br>
<span class="quotelev2">&gt;&gt;            * Do string-to-integer conversion, for both hex and
</span><br>
<span class="quotelev2">&gt;&gt;        decimal numbers
</span><br>
<span class="quotelev2">&gt;&gt;            */
</span><br>
<span class="quotelev2">&gt;&gt;           -static int intify(char *str)
</span><br>
<span class="quotelev2">&gt;&gt;           +int ompi_btl_openib_ini_intify(char *str)
</span><br>
<span class="quotelev2">&gt;&gt;            {
</span><br>
<span class="quotelev2">&gt;&gt;               while (isspace(*str)) {
</span><br>
<span class="quotelev2">&gt;&gt;                   ++str;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -568,7 +566,7 @@ static int intify(char *str)
</span><br>
<span class="quotelev2">&gt;&gt;            /*
</span><br>
<span class="quotelev2">&gt;&gt;            * Take a comma-delimited list and infity them all
</span><br>
<span class="quotelev2">&gt;&gt;            */
</span><br>
<span class="quotelev2">&gt;&gt;           -static int intify_list(char *value, uint32_t **values, int
</span><br>
<span class="quotelev2">&gt;&gt;        *len)
</span><br>
<span class="quotelev2">&gt;&gt;           +int ompi_btl_openib_ini_intify_list(char *value, uint32_t
</span><br>
<span class="quotelev2">&gt;&gt;           **values, int *len)
</span><br>
<span class="quotelev2">&gt;&gt;            {
</span><br>
<span class="quotelev2">&gt;&gt;               char *comma;
</span><br>
<span class="quotelev2">&gt;&gt;               char *str = value;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -584,7 +582,7 @@ static int intify_list(char *value, uint
</span><br>
<span class="quotelev2">&gt;&gt;                   if (NULL == *values) {
</span><br>
<span class="quotelev2">&gt;&gt;                       return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;                   }
</span><br>
<span class="quotelev2">&gt;&gt;           -        *values[0] = (uint32_t) intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;           +        *values[0] = (uint32_t)
</span><br>
<span class="quotelev2">&gt;&gt;        ompi_btl_openib_ini_intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;                   *len = 1;
</span><br>
<span class="quotelev2">&gt;&gt;               } else {
</span><br>
<span class="quotelev2">&gt;&gt;                   /* If we found a comma, loop over all the values.  Be a
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -594,7 +592,7 @@ static int intify_list(char *value, uint
</span><br>
<span class="quotelev2">&gt;&gt;                   do {
</span><br>
<span class="quotelev2">&gt;&gt;                       *comma = '\0';
</span><br>
<span class="quotelev2">&gt;&gt;                       *values = realloc(*values, sizeof(uint32_t) *
</span><br>
<span class="quotelev2">&gt;&gt;        (*len + 2));
</span><br>
<span class="quotelev2">&gt;&gt;           -            (*values)[*len] = (int32_t) intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;           +            (*values)[*len] = (int32_t)
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;                       ++(*len);
</span><br>
<span class="quotelev2">&gt;&gt;                       str = comma + 1;
</span><br>
<span class="quotelev2">&gt;&gt;                       comma = strchr(str, ',');
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -602,7 +600,7 @@ static int intify_list(char *value, uint
</span><br>
<span class="quotelev2">&gt;&gt;                   /* Get the last value (i.e., the value after the last
</span><br>
<span class="quotelev2">&gt;&gt;                      comma, because it won't have been snarfed in the
</span><br>
<span class="quotelev2">&gt;&gt;                      loop) */
</span><br>
<span class="quotelev2">&gt;&gt;           -        (*values)[*len] = (uint32_t) intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;           +        (*values)[*len] = (uint32_t)
</span><br>
<span class="quotelev2">&gt;&gt;        ompi_btl_openib_ini_intify(str);
</span><br>
<span class="quotelev2">&gt;&gt;                   ++(*len);
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Index: ompi/mca/btl/openib/btl_openib_ini.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;           --- ompi/mca/btl/openib/btl_openib_ini.h        (revision
</span><br>
<span class="quotelev2">&gt;&gt;        19490)
</span><br>
<span class="quotelev2">&gt;&gt;           +++ ompi/mca/btl/openib/btl_openib_ini.h        (working copy)
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -49,6 +49,9 @@ extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt;                */
</span><br>
<span class="quotelev2">&gt;&gt;               int ompi_btl_openib_ini_finalize(void);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           +    int ompi_btl_openib_ini_intify(char *string);
</span><br>
<span class="quotelev2">&gt;&gt;           +    int ompi_btl_openib_ini_intify_list(char *str, uint32_t
</span><br>
<span class="quotelev2">&gt;&gt;           **values, int *len);
</span><br>
<span class="quotelev2">&gt;&gt;           +
</span><br>
<span class="quotelev2">&gt;&gt;            #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            #endif
</span><br>
<span class="quotelev2">&gt;&gt;           Index: ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;           --- ompi/mca/btl/openib/btl_openib_mca.c        (revision
</span><br>
<span class="quotelev2">&gt;&gt;        19490)
</span><br>
<span class="quotelev2">&gt;&gt;           +++ ompi/mca/btl/openib/btl_openib_mca.c        (working copy)
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -27,6 +27,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;            #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;            #include &quot;btl_openib_mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           +#include &quot;btl_openib_ini.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            /*
</span><br>
<span class="quotelev2">&gt;&gt;            * Local flags
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -97,7 +98,7 @@ static inline int reg_int(const char* pa
</span><br>
<span class="quotelev2">&gt;&gt;            */
</span><br>
<span class="quotelev2">&gt;&gt;            int btl_openib_register_mca_params(void)
</span><br>
<span class="quotelev2">&gt;&gt;            {
</span><br>
<span class="quotelev2">&gt;&gt;           -    char *msg, *str;
</span><br>
<span class="quotelev2">&gt;&gt;           +    char *msg, *str, *pkey;
</span><br>
<span class="quotelev2">&gt;&gt;               int ival, ival2, ret, tmp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;           @@ -192,13 +193,15 @@ int btl_openib_register_mca_params(void)
</span><br>
<span class="quotelev2">&gt;&gt;                             0, &amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev2">&gt;&gt;               mca_btl_openib_component.ib_pkey_ix = (uint32_t) ival;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           -    CHECK(reg_int(&quot;ib_pkey_val&quot;, &quot;InfiniBand pkey value&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           +    CHECK(reg_string(&quot;ib_pkey_val&quot;, &quot;InfiniBand pkey value&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;(must be &gt; 0 and &lt; 0xffff)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;           -                  0, &amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev2">&gt;&gt;           -    if (ival &gt; 0xffff) {
</span><br>
<span class="quotelev2">&gt;&gt;           +                  &quot;0&quot;, &amp;pkey, 0));
</span><br>
<span class="quotelev2">&gt;&gt;           +    mca_btl_openib_component.ib_pkey_val =
</span><br>
<span class="quotelev2">&gt;&gt;           ompi_btl_openib_ini_intify(pkey) &amp; 0x7fff;
</span><br>
<span class="quotelev2">&gt;&gt;           +    if (mca_btl_openib_component.ib_pkey_val &gt; 0xffff ||
</span><br>
<span class="quotelev2">&gt;&gt;           +            mca_btl_openib_component.ib_pkey_val &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                   ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;           -    mca_btl_openib_component.ib_pkey_val = (uint32_t) ival;
</span><br>
<span class="quotelev2">&gt;&gt;           +    free(pkey);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               CHECK(reg_int(&quot;ib_psn&quot;, &quot;InfiniBand packet sequence
</span><br>
<span class="quotelev2">&gt;&gt;        starting
</span><br>
<span class="quotelev2">&gt;&gt;           number &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                             &quot;(must be &gt;= 0)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;           devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;           devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --    --
</span><br>
<span class="quotelev2">&gt;&gt;    Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt;    Mellanox Technologies LTD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies LTD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4747.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="4747.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4749.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
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
